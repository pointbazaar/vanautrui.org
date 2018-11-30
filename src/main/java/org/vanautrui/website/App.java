package org.vanautrui.website;

import static spark.Spark.*;

/**
 * Hello world!
 *
 */
public class App 
{
    public static void main( String[] args )
    {
        port(80);
        staticFiles.location("/public");
        init();

        System.out.println( " World!" );

        get("/",(req,res)->" world");
    }
}
