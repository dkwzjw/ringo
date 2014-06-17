<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="stylesheets/pygment_trac.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="stylesheets/print.css" media="print" />

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <title>Ringo</title>
    <style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style2 {color: #FF0066}
-->
    </style>
</head>

  <body>
    <header>
      <div class="inner_top">
        <h1>Ringo </h1>

        <a href="https://github.com/dkwzjw/ringo" target="_blank" class="button"><small>View project on</small>GitHub</a>		</div>
    </header>

    <div id="content-wrapper">
      <div class="inner_main clearfix">
        <section id="main-content">
		<?php include("side_menu.html"); ?>
		  <div id="rogo">
		    <h2 align="center">- Ringo <font color="red">♥</font>- </h2>
		    <p align="center"><img src="images/ringo-128.png" alt="ringo" width="128" height="128"></p>
	      </div>
		  <p class="concept"><br>
		    <br>
		    <br>
		  </p>
		  <h3>トラブルについて</h3>
		  <h4><strong><br>
	          <span class="style1">(1) ウォレットが起動しない、又はエラーメッセージが出る</span></strong><span class="style1">場合</span></h4>
		  <p><br>
		    一旦ウォレットを終了し、wallet.dat以外を消去し、再Syncしてください<br>
		    その際、<span class="style2">walllet.datはバックアップを取っておいてください</span><br>
		    <strong> <br>
		    直るかもしれない方法<br>
            </strong>1) winキー+Rを押す（スタートメニューからファイル名を指定して実行を押す）<br>
		    2) %appdata%\Ringoと入力<br>
		    <br>
		    <img src="images/appdata.png" alt="appdata" width="529" height="312"><br>
		    <br>
		    3)そのフォルダ内のwallet.dat以外を消去し、ウォレットを再起動します<br>
	      　<span class="style2">walllet.datはバックアップを取っておいてください</span><br>
		  　殆どの場合、同期が終われば通常通りに使えると思います。</p>
		  <h4>&nbsp;</h4>
		  <h4><strong><span class="style1">(2) 送金時のエラー(conflicted)で残高の表示が変になった場合</span></strong></h4>
		  <p><br>
		    一旦ウォレットを終了し、<span class="style2">walllet.datのバックアップを取っておいてください</span><br>
	          <strong><br>
          直るかもしれない方法</strong><br>
		  1)ringo-qt.exeのあるフォルダに新規テキストを作成<br>
		  2)テキストの中身をringo-qt.exe -salvagewalletといれ、拡張子をtxtからbatに変えて保存<br>
		  3)batを実行<br>
		  <strong><br>
		  </strong>- 受け取り用のアドレスが一部表示されなくなる件について-<br>
		  <br>
		  「コインを受け取る」にあったアドレスの一部が表示されなくなります<br>
		  (wallet.dat内には存在するので送金を受け取ることは可能)<br>
		  取引の一覧から「入金」や「PoS採掘」などから必要なアドレスをコピー、<br>
		  デバッグウィンドウのコンソールで<br>
		  dumpprivkey アドレス<br>
		  といれると文字列が出てきます(公開は絶対にしないでください)<br>
		  そのあと<br>
		  importprivkey 文字列<br>
		  で入れるとエラー出ますが目的のアドレスが「コインを受け取る」のところに入ります。<br>
		  </p>
		  <p>&nbsp;</p>
		  <p><strong>本サイト及びプログラムを利用することで発生したいかなる損失・損害に対しその責任を負いません </strong></p>
		    </li>
	      </ul>
	    </section>
      </div>
    </div>

  
  </body>
</html>