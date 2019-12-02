import java.io.*;
import java.io.FileReader;
import java.io.IOException;

public class newreadfile {
    public static String dirpath;

    public static void main(String[] args) {
        
    // System.out.println(s);
    File[] files = new File("/home/aakash/Desktop/gitpullafterdeletion27Nov/Services-Automation/WebService-Automation/test-output").listFiles();
    showFiles(files);
}   //end of main

public static void showFiles(File[] files) {
    // String dirpath = "";
    for (File file : files) {
        if (file.isDirectory()) {
            newreadfile.dirpath = file.getPath();
            System.out.println("Directory is "+ dirpath);
            System.out.println("Directory Name: " + file.getName());
            showFiles(file.listFiles()); // recusion.
        } else {
            if ( file.getName().endsWith(".html"))
                {System.out.println("File: " + file.getName());

            // now insert to read and change file code

            String content = "";
       
            
//<li><a href='<?php echo $pathValue;?>/modules/logout.php' class="button">Logout</a></li>
				
//<span class='suite-started-time'>2019-09-25 16:30:12</span>
        try {
            BufferedReader in = new BufferedReader(new FileReader(newreadfile.dirpath +"/"+ file.getName()));
            String fstr = "";
            while ((fstr = in.readLine()) != null) {

                content += "\n";
                if (fstr.contains("'suite-started-time'"))
                    {content +="<li><a href='<?php echo $pathValue;?>/logout.php' class='button'>Logout</a></li>";
                    content += "\n";
                    }   
                content += fstr;
                }
            in.close();
        } catch (IOException e) {
            System.out.println("file not read before tagstr");
            }   // read content of file
      
        String tagstr = "<?php include('../env.php'); include('../session.php');?> \n";
     
       String tagconstr = tagstr + content ; 


    // String str = content;
         
    String newStr = tagconstr.replaceAll("http://report.intermesh.net","<?php echo \\$pathValue;?>");


          



        // File file1 = new File();

        FileWriter fr = null;
        try {
            fr = new FileWriter(file);
            fr.write(newStr);
        } catch (IOException e) {
            System.out.println("Error in catach frwrite "+ e);
        }finally{
            try {
                
                fr.close();
        } catch (IOException e) {
            System.out.println("Error in catach frclose "+ e);
        }
        }
        
        String filename = file.getName();
        String filepath = file.getPath();
        // System.out.println("New filepath is "+ dirpath + filename);
        // System.out.println("filename is " + filename);
        String extensionRemoved = filename.split("\\.")[0] + ".php" ;
        System.out.println("extentionremoved"+extensionRemoved );
        String newfilepath = newreadfile.dirpath +"/" + extensionRemoved;
        System.out.println("New filepath is "+ newfilepath);
        File file2 = new File(newfilepath); 

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
        

