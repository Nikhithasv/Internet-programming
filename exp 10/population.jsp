<%-- 
    Document   : newjsnew
    Created on : Apr 4, 2023, 8:57:50 PM
    Author     : NIKITHA
--%>
<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@page import="exp10.pop"%>
<%@page import="java.util.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ExpNo10</title>
       
    </head>
    <body>
        <%
            out.println("<b>"+"Hello"+"</b>");
            out.println("<hr>");
           pop P=new pop("USA","WASHINGTON DC","popUSD",328200000);
           pop P1=new pop("CANADA","OTTAWA","CAD",960000000);
           pop P2=new pop("MEXICO","MEXICO CITY","MXN",130000000);
           pop P3=new pop("INDIA","DELHI","RUPEE",38000000);
            ArrayList<pop> obj=new ArrayList<pop>();
            obj.add(P);
              obj.add(P1);
                obj.add(P2);
                obj.add(P3);
         
//            for(student a:obj){
//                out.println(a.name);
//            }

pageContext.setAttribute("obj", obj);
        %>
        <table><tr><th>Name</th><th>Capital</th><th>Currency</th><th>population</th></tr>
        <c:forEach items="${pageScope.obj}" var="i">
           
                <tr> <td>${i.getName()}</td>
                    <td>${i.getcapital()}</td>
                    <td>${i.getcurrency()}</td>
                    <td>${i.getpopulation()}</td>

                   
                </tr>
        </c:forEach>  
        </table>
       
        <%out.println("<b>"+"Highest Population"+"</b>");
         out.println("<hr>");
        %>
              <table><tr><th>Name</th><th>Capital</th><th>Currency</th><th>population</th></tr>
        <c:forEach items="${pageScope.obj}" var="i">
           <c:set var="count" value="${count+1}" />
                <tr> <td>${i.getName()}</td>
                    <td>${i.getcapital()}</td>
                    <td>${i.getcurrency()}</td>
                    <td>   <c:if test="${count <= 3}">
                        <span style="color:red;">${i.population}</span>
                    </c:if>
                    <c:if test="${count > 3}">
                        ${i.population}
                    </c:if>
                         <td>${i.getpopulation()}</td>
               
                         </td>
                   
                </tr>
        </c:forEach>  
        </table>

    </body>
   
      <style>
     
body{
    background-image: url("https://cdn.dribbble.com/users/1583884/screenshots/17868785/rm281-adj-067_4x.jpg");
        background-repeat: repeat;
         margin-right: 180px;

}
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
 font-family: "Times New Roman";
 padding: 30px;
}  
   </style>
   
</html>