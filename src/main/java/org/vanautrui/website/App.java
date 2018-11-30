package org.vanautrui.website;

import java.util.logging.Level;
import java.util.logging.Logger;

import static java.lang.System.getProperty;
import static spark.Spark.*;

/**
 * Hello world!
 *
 */
public class App 
{
    public static void main( String[] args )
    {
        String keystorepassword=args[0];
        port(80);
        //threadPool(1);

        String path= getProperty("user.dir");
        staticFiles.externalLocation(path+"/src/main/resources/public");
        //staticFileLocation("/public");
        
        secure("/etc/letsencrypt/live/vanautrui.org/mykeystore.jks", keystorepassword,null,null);


        init();

        System.out.println( " World!" );

        get("/test",(req,res)->{

            return "world";
        }
        );
    }
}
