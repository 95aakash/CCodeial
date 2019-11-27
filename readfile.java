import java.io.*;
import java.io.FileReader;
import java.io.IOException;

public class readfile {
    public static String dirpath;

    public static void main(String[] args) {
        // String content = "";
        // try {
        //     BufferedReader in = new BufferedReader(new FileReader("mypage.html"));
        //     String str;
        //     while ((str = in.readLine()) != null) {
        //         content +=str;
        //     }
        //     in.close();
        // } catch (IOException e) {
        // }

        // String s = "<?php include('../config.php'); include('../session.php');?> \n";
        // // s = s.concat(content); 
        // s= s + content ;
        // FileWriter fw = new FileWriter('mypage.html',false);



//         File file = new File("mypage.html");
//         FileWriter fr = null;
//         try {
//             fr = new FileWriter(file);
//             fr.write(s);
//         } catch (IOException e) {
//             e.printStackTrace();
//         }finally{
//             try {
                
//                 fr.close();
//         } catch (IOException e) {
//             e.printStackTrace();
//         }
        
//     }
//    file  = new File("mypage.html"); 
//     File file2 = new File("mypage.php"); 
//     boolean success = file.renameTo(file2);
//     if (success) {
//         // File has been renamed
//         System.out.println("renamed");
//     }

    // System.out.println(s);
    File[] files = new File("/home/aakash/Desktop/anshgitdev/Services-Automation/RemoteSystemsTempFiles").listFiles();
    showFiles(files);
}   //end of main

public static void showFiles(File[] files) {
    // String dirpath = "";
    for (File file : files) {
        if (file.isDirectory()) {
            readfile.dirpath = file.getPath();
            System.out.println("Directory is "+ dirpath);
            System.out.println("Directory Name: " + file.getName());
            showFiles(file.listFiles()); // Calls same method again.
        } else {
            if ( file.getName().endsWith(".html"))
                {System.out.println("File: " + file.getName());

            // now insert to read and change file code

            String content = "";
        try {
            
            BufferedReader in = new BufferedReader(new FileReader(readfile.dirpath +"/"+ file.getName()));
            String str;
            while ((str = in.readLine()) != null) {
                content += "\n";
                content +=str;
                // content += "\n"
            }
            in.close();
        } catch (IOException e) {
            System.out.println("file not read" + e);
            }   // read content of file
           
        String s = "<?php include('../config.php'); include('../session.php');?> \n";
     
        s= s + content ; // s if final content to be written
        // System.out.println("final content to be written" + s);
       



        // File file1 = new File();
        FileWriter fr = null;
        try {
            fr = new FileWriter(file);
            fr.write(s);
        } catch (IOException e) {
            e.printStackTrace();
        }finally{
            try {
                
                fr.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
        
    }
    // File file3  = new File(file.getName()); // origninal html file
        
        String filename = file.getName();
        String filepath = file.getPath();
        // System.out.println("New filepath is "+ dirpath + filename);
        System.out.println("filename is " + filename);
        String extensionRemoved = filename.split("\\.")[0] + ".php" ;
        System.out.println(extensionRemoved );
        String newfilepath = readfile.dirpath +"/" + extensionRemoved;
        System.out.println("New filepath is "+ newfilepath);
        File file2 = new File(newfilepath); 
        // System.out.println((file.getName().split("."))+".php");
        boolean success = file.renameTo(file2);
        if (success) {
            // File has been renamed
            System.out.println("renamed");
        }


            
            
            }
            else {
                System.out.println("File not found");
            }
        }
    }
}
}

