<?php

$ this - > load - > library（' Pdf '）;

$ pdf  =  new  Pdf（' P '，' mm '，' A4 '，true，' UTF-8 '，false）;
$ pdf - > SetTitle（'我的標題'）;
$ pdf - > SetHeaderMargin（30）;
$ pdf - > SetTopMargin（20）;
$ pdf - > setFooterMargin（20）;
$ pdf - > SetAutoPageBreak（true）;
$ pdf - > SetAuthor（' Author '）;
$ pdf - > SetDisplayMode（' real '，' default '）;

$ pdf - > AddPage（）;

$ pdf - >寫（5，'一些示例文本'）;
$ pdf - >輸出（' My-File-Name.pdf '，' I '）;
