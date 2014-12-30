<?php

/*

VaultDB - Vault Manager
Copyright (c) 2012-2014, Maxime Labelle
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:
1. Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.
2. Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in the
   documentation and/or other materials provided with the distribution.
3. All advertising materials mentioning features or use of this software
   must display the following acknowledgement:
   This product includes software developed by Maxime Labelle.
4. Neither the name of VaultDB nor the
   names of its contributors may be used to endorse or promote products
   derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY MAXIME LABELLE ''AS IS'' AND ANY
EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL MAXIME LABELLE BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

*/

require_once("../vaultdb.php");

$page = "home";

if (isset($_GET["page"])) { $page = $_GET["page"]; }

function loadview($page) {
	$filename = $page.".php";
	if (file_exists($filename)) {
		include("__header.php");
		include($filename);
		include("__footer.php");
	} else { 
		echo '
			<div align="center">
			<table width="80%" padding="10">
			<tr style="background:#cccccc;"><td align="center" style="font-family: helvetica;"><br/><h1>404 - Page not found</h1><br/><a href="?page=home">Click here</a><br/>&nbsp;</td></tr>
			</table>
			</div>
		'; 
	}
}

loadview($page);

?>
