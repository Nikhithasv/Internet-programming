/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ex14;


import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;
import java.sql.*;
import javax.xml.ws.RequestWrapper;
import javax.xml.ws.ResponseWrapper;
/** *

 * @author NIKITHA
 */
@WebService(serviceName = "NewWebService")
public class NewWebService {    /**
     * This is a sample web service operation
     */
 @WebMethod(operationName = "add")
    public int add(@WebParam(name="name") String name,@WebParam(name="id") int cusId,@WebParam(name="mail")String mail){
  char ct=0;
        try{
            Connection c=DriverManager.getConnection("jdbc:derby://localhost:1527/nikij");
            Statement st=c.createStatement();
            ResultSet id=st.executeQuery("select * from customer");
            while(id.next()){
               
                        st.executeUpdate("insert into customer values('"+name+"',"+cusId+",'"+mail+"')");
                   
                }
               
        }
        catch(Exception e){
            System.out.println(e);
        }
     return ct;
    }

    /**
     * Web service operation
     */
   @WebMethod(operationName = "edit")
    public int edit(@WebParam(name="name") String name,@WebParam(name="id") int cusId,@WebParam(name="mail")String mail){
  char ct=0;
        try{
            Connection c=DriverManager.getConnection("jdbc:derby://localhost:1527/nikij");
            Statement st=c.createStatement();
            ResultSet id=st.executeQuery("select * from customer");
            while(id.next()){
                if(id.getInt(2)==cusId){
                 st.executeUpdate("update customer set name='"+name+"',email='"+mail+"' where cusid="+cusId+"");   
                    
                }
                
                }
               
        }
        catch(Exception e){
            System.out.println(e);
        }
     return ct;
    }
    
      @WebMethod(operationName = "view")
    public String view(){
        String s = "";
        try{
            ResultSet id = null;
            Connection c=DriverManager.getConnection("jdbc:derby://localhost:1527/nikij");
            PreparedStatement st=c.prepareStatement("select * from customer");
            id=st.executeQuery();
            while(id.next())
            {
                //st.executeQuery("select * from customer");
             String n = id.getString("name");
                int n1 =id.getInt("cusId");
              String n2 = id.getString("email");
              s += n+" "+n1+" "+n2+"\n";  
              
    
                   
            }
     
     
        }
        catch(Exception e){
            System.out.println(e);
        }
     return s;
    }
     
}
