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
    private String darkgreen="#014421";
    private String yellow="#F9A602";
    public static void main( String[] args )
    {

	try{
        	port(443);
            //the password to the keystore must be given als argument
            String pass=args[0];
            //reads keystore password from the environment
            secure("/etc/letsencrypt/live/vanautrui.org/keystore.jks", pass, null,null);

            //secure before setting static files location
	        String path= System.getProperty("user.dir");
	        staticFiles.externalLocation(path+"/src/main/resources/public");

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
