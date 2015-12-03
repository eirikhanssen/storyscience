<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0">
    <xsl:output method="html" indent="yes"/>
    <xsl:template match="/">
        <h1>Found root!!!</h1>
        <xsl:apply-templates/>
    </xsl:template>
    
    <xsl:template match="key/*">
        <xsl:variable name="key" select="../@id"/>
        <xsl:element name="{local-name()}">
            <xsl:attribute name="id" select="concat(ancestor::*[@lang]/@lang, '.', $key)"/>
            <xsl:attribute name="data-key" select="$key"/>
            <xsl:apply-templates/>
        </xsl:element>
    </xsl:template>
</xsl:stylesheet>