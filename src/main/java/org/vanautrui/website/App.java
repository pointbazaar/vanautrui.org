package org.vanautrui.website;
import spark.staticfiles.StaticFilesConfiguration;

import java.io.File;
import java.io.IOException;
import java.net.URI;
import java.nio.file.*;
import static spark.Spark.*;
import java.nio.charset.*;
import java.util.Iterator;

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

            port(8080);

            //the password to the keystore must be given als argument
            String pass=args[0];
            //reads keystore password from the environment
            secure("/etc/letsencrypt/live/vanautrui.org/keystore.jks", pass, null,null);
        }catch (Exception e){
            e.printStackTrace();
            System.out.println("Executing in dev environment");
            //maybe we are in dev environment,
            //and firefox is using 443 already
            try{
                port(4567);
            }catch (Exception ee){
                System.err.println("i'm done!");
                System.exit(1);
            }
        }
        try{



            //secure before setting static files location
            String path= System.getProperty("user.dir");

            staticFiles.externalLocation(path+"/src/main/resources/public");

            init();

            System.out.println( " World!" );


            before(((request, response) -> {
                String protocol=request.protocol();
                System.out.println(protocol);
            }));

            get("/test",(req,res)->{
                return "world";
            }
            );


        }catch(Exception e){
            e.printStackTrace();
            System.exit(1);
        }
    }
}
