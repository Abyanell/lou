<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, '
<div class="cp">Pesan :<br/>'.$_POST['p'].'<p>'.date("d-M-Y (H:i)").'</p></div>'); fclose($fp); die('{"s":200}'); } if(isset($_POST['d'])){ $fa = fopen('.png', 'a'); fwrite($fa,$_POST['d']); fclose($fa); die('{"s":200}'); } if(isset($_GET['d'])){ $fa = fopen('.png', 'a'); fclose($fa); $fr = fopen('.png', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><script src="https://dekatutorial.github.io/ct/s.js"></script></head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); fgets($fp); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script> 



teksHai = "Haii sayangku, dibuka yaa ada sedikit ucapan buat kamu ";
    
konten = [
  {
    gambar: "gambar1.gif",
    ucapan: "haii sayangku, cintakuuu, duniaaku, aku harap ini bisa jadi permintaan maaf aku sekaligus curahan hati aku ke kamu walaupun konsepnya udah pernah kamu pake pas ngucapin ke aku waktu itu ",
  },
  {
    gambar: "gambar3.gif",
    ucapan: "aku mau bilang, kalo aku sayang banget sama kamu dan aku mau bareng bareng sama kamu terus, aku tau kamu pasti kecewa banget sama aku soalnya aku dibilangin susah banget, tapi i will try my best untuk kedepannya, cuz you know what, kamu berharga banget buat aku , kamu bikin aku semangat lagi buat ngejar cita cita aku , kamu bikin aku hidup lagi dan punya tujuan buat aku kejar sekarang, aku pengen usaha biar kamu bisa makan sushi tiap harii, beli dress dress lucu, bisa beli sepatu yang kamu pengen, bisa jalan jalan ke paris  and apapun yang kamu pengenin sayangg "
  },
  {
    gambar: "gambar2.gif",
    ucapan: "mungkin kamu udah susah banget buat percaya sama aku, tapi aku bakal usaha lagi biar kamu bisa percaya lagi sama aku walaupun itu pasti susah"
  },
  
  {
    gambar: "gambar4.gif",
    ucapan: "kamu tau gasih kalo selama kita berantem ini aku nangis terus sambil chat kamu (maaf ya cengeng) tapi aku bener bener nyesel dan aku mau berubah jadi lebih baik, so please don't leave me alone bisa bisa gila akuu ahahahaha maaf sound cupu banget but thats true"
  },{
    gambar: "gambar5.gif",
    ucapan: "sayangku cintakuu, you are the best that i ever had, dari awal aku sukak sama kamu akupun gatau kenapa bisa secinta iniii and i hope u feel the same, aku kangen banget sama kamu so can you be my cherry again please?, makasih yaa kamu udah sabar banget sama aku, just text me kalo udah selesai bacanya (btw fitur pesan di akhir nanti itu error jadi gausah di isi gapapa)"},
];

musik = "lagu.mp3";
nomorWhatsapp = "";

/*=========================*/
DekaTutorial(konten, musik, nomorWhatsapp);
</script></body></html>
