package org.vanautrui.website;
import java.nio.file.*;
import static spark.Spark.*;
import java.nio.charset.*;
/**
 * Hello world!
 *
 */
public class App 
{
    public static void main( String[] args )
    {

	try{
        	port(443);

	        String path= System.getProperty("user.dir");
	        staticFiles.externalLocation(path+"/src/main/resources/public");

		//the password to the keystore must be given als argument
		String pass=args[0];

        	//reads keystore password from the environment
	        secure("/etc/letsencrypt/live/vanautrui.org/keystore.jks", pass, null,null);

	        init();

	        System.out.println( " World!" );

	        get("/test",(req,res)->{
	            return "world";
	        }
	        );


	}catch(Exception e){
		e.printStackTrace();
	}
    }
}
