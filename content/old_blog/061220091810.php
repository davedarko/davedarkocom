<h2>Java Applet POSTet jetzt</h2>
06.12.2009 - 18:10<p>
Dem Gameboy Applet einen Schritt näher gerückt...

<pre>
import java.awt.TextArea;
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.InetAddress;
import java.net.Socket;
import java.net.URLEncoder;


public class PostMan extends java.applet.Applet {
  public void init() {
    TextArea tf_out = new TextArea(20,60);
      add(tf_out);
      try {
        // Construct data
        String data = URLEncoder.encode("name", "UTF-8") + "=" 
        + URLEncoder.encode("Dave", "UTF-8");
        data += "&" + URLEncoder.encode("email", "UTF-8") + "=" 
        + URLEncoder.encode("mankee@web.de", "UTF-8");
        data += "&" + URLEncoder.encode("eintrag", "UTF-8") + "=" 
        + URLEncoder.encode(
          "Der Dave schreibt nun von seinem Java Applet.",
          "UTF-8");
        data += "&" + URLEncoder.encode("title", "UTF-8") + "=" 
        + URLEncoder.encode("guests", "UTF-8");
        data += "&" + URLEncoder.encode("Button", "UTF-8") + "=" 
        + URLEncoder.encode("Absenden", "UTF-8");		        
        // Create a socket to the host
        String hostname = "www.davedarko.com";
        int port = 80;
        InetAddress addr = InetAddress.getByName(hostname);
        Socket socket = new Socket(addr, port);

  
        // Send header
        String path = "/gb.php";
        BufferedWriter wr = new BufferedWriter(new OutputStreamWriter(
          socket.getOutputStream(), "UTF8"));
  
        wr.write("POST "+path+" HTTP/1.1\r\n");
        wr.write("Host: "+hostname+"\r\n");
        wr.write("User-Agent: Mozilla/5.0\r\n");
        wr.write("Content-Length: "+data.length()+"\r\n");
        wr.write("Content-Type: application/x-www-form-urlencoded\r\n");
        wr.write("\r\n");
        wr.write(data);
        wr.flush();

        // Get response
        BufferedReader rd = new BufferedReader(
            new InputStreamReader(socket.getInputStream()));
        String line;
        while ((line = rd.readLine()) != null) {
          // Process line...
          tf_out.append(line+"\r\n");
        }
        wr.close();
        rd.close();
      } catch (Exception e) {
    }
  }
}

</pre>
