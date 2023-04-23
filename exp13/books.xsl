<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <body>
        <h2>Book availability </h2>
        <table border="1">
          <tr bgcolor="#9acd32">
            <th>Title</th>
            <th>Price</th>
           
          </tr>
          <xsl:for-each select="books/book">
            <tr>
              <xsl:choose>
                <xsl:when test="available='yes'">
                  <td><xsl:value-of select="title"/></td>
                 
                 
                </xsl:when>
                <xsl:otherwise>
                  <td bgcolor="red"><b><xsl:value-of select="title"/></b></td>
                  <td bgcolor="red"><b><xsl:value-of select="price"/></b></td>
                 
                </xsl:otherwise>
              </xsl:choose>
              <td><xsl:value-of select="price"/></td>
             
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>