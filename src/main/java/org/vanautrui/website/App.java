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
        threadPool(1);
        staticFiles.externalLocation("/public");
        staticFileLocation("/public");

        init();

        System.out.println( " World!" );

        get("/",(req,res)->" world");
    }
}
