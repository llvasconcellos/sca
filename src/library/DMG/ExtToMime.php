<?php

class DMG_ExtToMime {
	protected function __construct () {
		throw new Exception("This class can't be instanciated.");
	}
	public static function get ($ext) {
		$mime = array();		

		$mime['x-world/x-3dmf'] = '3dm';
		$mime['x-world/x-3dmf'] = '3dmf';
		$mime['application/octet-stream'] = 'a';
		$mime['application/x-authorware-bin'] = 'aab';
		$mime['application/x-authorware-map'] = 'aam';
		$mime['application/x-authorware-seg'] = 'aas';
		$mime['text/vnd.abc'] = 'abc';
		$mime['text/html'] = 'acgi';
		$mime['video/animaflex'] = 'afl';
		$mime['application/postscript'] = 'ai';
		$mime['audio/aiff'] = 'aif';
		$mime['audio/x-aiff'] = 'aif';
		$mime['audio/aiff'] = 'aifc';
		$mime['audio/x-aiff'] = 'aifc';
		$mime['audio/aiff'] = 'aiff';
		$mime['audio/x-aiff'] = 'aiff';
		$mime['application/x-aim'] = 'aim';
		$mime['text/x-audiosoft-intra'] = 'aip';
		$mime['application/x-navi-animation'] = 'ani';
		$mime['application/x-nokia-9000-communicator-add-on-software'] = 'aos';
		$mime['application/mime'] = 'aps';
		$mime['application/octet-stream'] = 'arc';
		$mime['application/arj'] = 'arj';
		$mime['application/octet-stream'] = 'arj';
		$mime['image/x-jg'] = 'art';
		$mime['video/x-ms-asf'] = 'asf';
		$mime['text/x-asm'] = 'asm';
		$mime['text/asp'] = 'asp';
		$mime['application/x-mplayer2'] = 'asx';
		$mime['video/x-ms-asf'] = 'asx';
		$mime['video/x-ms-asf-plugin'] = 'asx';
		$mime['audio/basic'] = 'au';
		$mime['audio/x-au'] = 'au';
		$mime['application/x-troff-msvideo'] = 'avi';
		$mime['video/avi'] = 'avi';
		$mime['video/msvideo'] = 'avi';
		$mime['video/x-msvideo'] = 'avi';
		$mime['video/avs-video'] = 'avs';
		$mime['application/x-bcpio'] = 'bcpio';
		$mime['application/mac-binary'] = 'bin';
		$mime['application/macbinary'] = 'bin';
		$mime['application/octet-stream'] = 'bin';
		$mime['application/x-binary'] = 'bin';
		$mime['application/x-macbinary'] = 'bin';
		$mime['image/bmp'] = 'bm';
		$mime['image/bmp'] = 'bmp';
		$mime['image/x-windows-bmp'] = 'bmp';
		$mime['application/book'] = 'boo';
		$mime['application/book'] = 'book';
		$mime['application/x-bzip2'] = 'boz';
		$mime['application/x-bsh'] = 'bsh';
		$mime['application/x-bzip'] = 'bz';
		$mime['application/x-bzip2'] = 'bz2';
		$mime['text/plain'] = 'c';
		$mime['text/x-c'] = 'c';
		$mime['text/plain'] = 'c++';
		$mime['application/vnd.ms-pki.seccat'] = 'cat';
		$mime['text/plain'] = 'cc';
		$mime['text/x-c'] = 'cc';
		$mime['application/clariscad'] = 'ccad';
		$mime['application/x-cocoa'] = 'cco';
		$mime['application/cdf'] = 'cdf';
		$mime['application/x-cdf'] = 'cdf';
		$mime['application/x-netcdf'] = 'cdf';
		$mime['application/pkix-cert'] = 'cer';
		$mime['application/x-x509-ca-cert'] = 'cer';
		$mime['application/x-chat'] = 'cha';
		$mime['application/x-chat'] = 'chat';
		$mime['application/java'] = 'class';
		$mime['application/java-byte-code'] = 'class';
		$mime['application/x-java-class'] = 'class';
		$mime['application/octet-stream'] = 'com';
		$mime['text/plain'] = 'com';
		$mime['text/plain'] = 'conf';
		$mime['application/x-cpio'] = 'cpio';
		$mime['text/x-c'] = 'cpp';
		$mime['application/mac-compactpro'] = 'cpt';
		$mime['application/x-compactpro'] = 'cpt';
		$mime['application/x-cpt'] = 'cpt';
		$mime['application/pkcs-crl'] = 'crl';
		$mime['application/pkix-crl'] = 'crl';
		$mime['application/pkix-cert'] = 'crt';
		$mime['application/x-x509-ca-cert'] = 'crt';
		$mime['application/x-x509-user-cert'] = 'crt';
		$mime['application/x-csh'] = 'csh';
		$mime['text/x-script.csh'] = 'csh';
		$mime['application/x-pointplus'] = 'css';
		$mime['text/css'] = 'css';
		$mime['text/plain'] = 'cxx';
		$mime['application/x-director'] = 'dcr';
		$mime['application/x-deepv'] = 'deepv';
		$mime['text/plain'] = 'def';
		$mime['application/x-x509-ca-cert'] = 'der';
		$mime['video/x-dv'] = 'dif';
		$mime['application/x-director'] = 'dir';
		$mime['video/dl'] = 'dl';
		$mime['video/x-dl'] = 'dl';
		$mime['application/msword'] = 'doc';
		$mime['application/msword'] = 'dot';
		$mime['application/commonground'] = 'dp';
		$mime['application/drafting'] = 'drw';
		$mime['application/octet-stream'] = 'dump';
		$mime['video/x-dv'] = 'dv';
		$mime['application/x-dvi'] = 'dvi';
		$mime['drawing/x-dwf (old)'] = 'dwf';
		$mime['model/vnd.dwf'] = 'dwf';
		$mime['application/acad'] = 'dwg';
		$mime['image/vnd.dwg'] = 'dwg';
		$mime['image/x-dwg'] = 'dwg';
		$mime['application/dxf'] = 'dxf';
		$mime['image/vnd.dwg'] = 'dxf';
		$mime['image/x-dwg'] = 'dxf';
		$mime['application/x-director'] = 'dxr';
		$mime['text/x-script.elisp'] = 'el';
		$mime['application/x-bytecode.elisp (compiled elisp)'] = 'elc';
		$mime['application/x-elc'] = 'elc';
		$mime['application/x-envoy'] = 'env';
		$mime['application/postscript'] = 'eps';
		$mime['application/x-esrehber'] = 'es';
		$mime['text/x-setext'] = 'etx';
		$mime['application/envoy'] = 'evy';
		$mime['application/x-envoy'] = 'evy';
		$mime['application/octet-stream'] = 'exe';
		$mime['text/plain'] = 'f';
		$mime['text/x-fortran'] = 'f';
		$mime['text/x-fortran'] = 'f77';
		$mime['text/plain'] = 'f90';
		$mime['text/x-fortran'] = 'f90';
		$mime['application/vnd.fdf'] = 'fdf';
		$mime['application/fractals'] = 'fif';
		$mime['image/fif'] = 'fif';
		$mime['video/fli'] = 'fli';
		$mime['video/x-fli'] = 'fli';
		$mime['image/florian'] = 'flo';
		$mime['text/vnd.fmi.flexstor'] = 'flx';
		$mime['video/x-atomic3d-feature'] = 'fmf';
		$mime['text/plain'] = 'for';
		$mime['text/x-fortran'] = 'for';
		$mime['image/vnd.fpx'] = 'fpx';
		$mime['image/vnd.net-fpx'] = 'fpx';
		$mime['application/freeloader'] = 'frl';
		$mime['audio/make'] = 'funk';
		$mime['text/plain'] = 'g';
		$mime['image/g3fax'] = 'g3';
		$mime['image/gif'] = 'gif';
		$mime['video/gl'] = 'gl';
		$mime['video/x-gl'] = 'gl';
		$mime['audio/x-gsm'] = 'gsd';
		$mime['audio/x-gsm'] = 'gsm';
		$mime['application/x-gsp'] = 'gsp';
		$mime['application/x-gss'] = 'gss';
		$mime['application/x-gtar'] = 'gtar';
		$mime['application/x-compressed'] = 'gz';
		$mime['application/x-gzip'] = 'gz';
		$mime['application/x-gzip'] = 'gzip';
		$mime['multipart/x-gzip'] = 'gzip';
		$mime['text/plain'] = 'h';
		$mime['text/x-h'] = 'h';
		$mime['application/x-hdf'] = 'hdf';
		$mime['application/x-helpfile'] = 'help';
		$mime['application/vnd.hp-hpgl'] = 'hgl';
		$mime['text/plain'] = 'hh';
		$mime['text/x-h'] = 'hh';
		$mime['text/x-script'] = 'hlb';
		$mime['application/hlp'] = 'hlp';
		$mime['application/x-helpfile'] = 'hlp';
		$mime['application/x-winhelp'] = 'hlp';
		$mime['application/vnd.hp-hpgl'] = 'hpg';
		$mime['application/vnd.hp-hpgl'] = 'hpgl';
		$mime['application/binhex'] = 'hqx';
		$mime['application/binhex4'] = 'hqx';
		$mime['application/mac-binhex'] = 'hqx';
		$mime['application/mac-binhex40'] = 'hqx';
		$mime['application/x-binhex40'] = 'hqx';
		$mime['application/x-mac-binhex40'] = 'hqx';
		$mime['application/hta'] = 'hta';
		$mime['text/x-component'] = 'htc';
		$mime['text/html'] = 'htm';
		$mime['text/html'] = 'html';
		$mime['text/html'] = 'htmls';
		$mime['text/webviewhtml'] = 'htt';
		$mime['text/html'] = 'htx';
		$mime['x-conference/x-cooltalk'] = 'ice';
		$mime['image/x-icon'] = 'ico';
		$mime['text/plain'] = 'idc';
		$mime['image/ief'] = 'ief';
		$mime['image/ief'] = 'iefs';
		$mime['application/iges'] = 'iges';
		$mime['model/iges'] = 'iges';
		$mime['application/iges'] = 'igs';
		$mime['model/iges'] = 'igs';
		$mime['application/x-ima'] = 'ima';
		$mime['application/x-httpd-imap'] = 'imap';
		$mime['application/inf'] = 'inf';
		$mime['application/x-internett-signup'] = 'ins';
		$mime['application/x-ip2'] = 'ip';
		$mime['video/x-isvideo'] = 'isu';
		$mime['audio/it'] = 'it';
		$mime['application/x-inventor'] = 'iv';
		$mime['i-world/i-vrml'] = 'ivr';
		$mime['application/x-livescreen'] = 'ivy';
		$mime['audio/x-jam'] = 'jam';
		$mime['text/plain'] = 'jav';
		$mime['text/x-java-source'] = 'jav';
		$mime['text/plain'] = 'java';
		$mime['text/x-java-source'] = 'java';
		$mime['application/x-java-commerce'] = 'jcm';
		$mime['image/jpeg'] = 'jfif';
		$mime['image/pjpeg'] = 'jfif';
		$mime['image/jpeg'] = 'jfif-tbnl';
		$mime['image/jpeg'] = 'jpe';
		$mime['image/pjpeg'] = 'jpe';
		$mime['image/jpeg'] = 'jpeg';
		$mime['image/pjpeg'] = 'jpeg';
		$mime['image/jpeg'] = 'jpg';
		$mime['image/pjpeg'] = 'jpg';
		$mime['image/x-jps'] = 'jps';
		$mime['application/x-javascript'] = 'js';
		$mime['image/jutvision'] = 'jut';
		$mime['audio/midi'] = 'kar';
		$mime['music/x-karaoke'] = 'kar';
		$mime['application/x-ksh'] = 'ksh';
		$mime['text/x-script.ksh'] = 'ksh';
		$mime['audio/nspaudio'] = 'la';
		$mime['audio/x-nspaudio'] = 'la';
		$mime['audio/x-liveaudio'] = 'lam';
		$mime['application/x-latex'] = 'latex';
		$mime['application/lha'] = 'lha';
		$mime['application/octet-stream'] = 'lha';
		$mime['application/x-lha'] = 'lha';
		$mime['application/octet-stream'] = 'lhx';
		$mime['text/plain'] = 'list';
		$mime['audio/nspaudio'] = 'lma';
		$mime['audio/x-nspaudio'] = 'lma';
		$mime['text/plain'] = 'log';
		$mime['application/x-lisp'] = 'lsp';
		$mime['text/x-script.lisp'] = 'lsp';
		$mime['text/plain'] = 'lst';
		$mime['text/x-la-asf'] = 'lsx';
		$mime['application/x-latex'] = 'ltx';
		$mime['application/octet-stream'] = 'lzh';
		$mime['application/x-lzh'] = 'lzh';
		$mime['application/lzx'] = 'lzx';
		$mime['application/octet-stream'] = 'lzx';
		$mime['application/x-lzx'] = 'lzx';
		$mime['text/plain'] = 'm';
		$mime['text/x-m'] = 'm';
		$mime['video/mpeg'] = 'm1v';
		$mime['audio/mpeg'] = 'm2a';
		$mime['video/mpeg'] = 'm2v';
		$mime['audio/x-mpequrl'] = 'm3u';
		$mime['application/x-troff-man'] = 'man';
		$mime['application/x-navimap'] = 'map';
		$mime['text/plain'] = 'mar';
		$mime['application/mbedlet'] = 'mbd';
		$mime['application/x-magic-cap-package-1.0'] = 'mc$';
		$mime['application/mcad'] = 'mcd';
		$mime['application/x-mathcad'] = 'mcd';
		$mime['image/vasa'] = 'mcf';
		$mime['text/mcf'] = 'mcf';
		$mime['application/netmc'] = 'mcp';
		$mime['application/x-troff-me'] = 'me';
		$mime['message/rfc822'] = 'mht';
		$mime['message/rfc822'] = 'mhtml';
		$mime['application/x-midi'] = 'mid';
		$mime['audio/midi'] = 'mid';
		$mime['audio/x-mid'] = 'mid';
		$mime['audio/x-midi'] = 'mid';
		$mime['music/crescendo'] = 'mid';
		$mime['x-music/x-midi'] = 'mid';
		$mime['application/x-midi'] = 'midi';
		$mime['audio/midi'] = 'midi';
		$mime['audio/x-mid'] = 'midi';
		$mime['audio/x-midi'] = 'midi';
		$mime['music/crescendo'] = 'midi';
		$mime['x-music/x-midi'] = 'midi';
		$mime['application/x-frame'] = 'mif';
		$mime['application/x-mif'] = 'mif';
		$mime['message/rfc822'] = 'mime';
		$mime['www/mime'] = 'mime';
		$mime['audio/x-vnd.audioexplosion.mjuicemediafile'] = 'mjf';
		$mime['video/x-motion-jpeg'] = 'mjpg';
		$mime['application/base64'] = 'mm';
		$mime['application/x-meme'] = 'mm';
		$mime['application/base64'] = 'mme';
		$mime['audio/mod'] = 'mod';
		$mime['audio/x-mod'] = 'mod';
		$mime['video/quicktime'] = 'moov';
		$mime['video/quicktime'] = 'mov';
		$mime['video/x-sgi-movie'] = 'movie';
		$mime['audio/mpeg'] = 'mp2';
		$mime['audio/x-mpeg'] = 'mp2';
		$mime['video/mpeg'] = 'mp2';
		$mime['video/x-mpeg'] = 'mp2';
		$mime['video/x-mpeq2a'] = 'mp2';
		$mime['audio/mpeg3'] = 'mp3';
		$mime['audio/x-mpeg-3'] = 'mp3';
		$mime['video/mpeg'] = 'mp3';
		$mime['video/x-mpeg'] = 'mp3';
		$mime['audio/mpeg'] = 'mpa';
		$mime['video/mpeg'] = 'mpa';
		$mime['application/x-project'] = 'mpc';
		$mime['video/mpeg'] = 'mpe';
		$mime['video/mpeg'] = 'mpeg';
		$mime['audio/mpeg'] = 'mpg';
		$mime['video/mpeg'] = 'mpg';
		$mime['audio/mpeg'] = 'mpga';
		$mime['application/vnd.ms-project'] = 'mpp';
		$mime['application/x-project'] = 'mpt';
		$mime['application/x-project'] = 'mpv';
		$mime['application/x-project'] = 'mpx';
		$mime['application/marc'] = 'mrc';
		$mime['application/x-troff-ms'] = 'ms';
		$mime['video/x-sgi-movie'] = 'mv';
		$mime['audio/make'] = 'my';
		$mime['application/x-vnd.audioexplosion.mzz'] = 'mzz';
		$mime['image/naplps'] = 'nap';
		$mime['image/naplps'] = 'naplps';
		$mime['application/x-netcdf'] = 'nc';
		$mime['application/vnd.nokia.configuration-message'] = 'ncm';
		$mime['image/x-niff'] = 'nif';
		$mime['image/x-niff'] = 'niff';
		$mime['application/x-mix-transfer'] = 'nix';
		$mime['application/x-conference'] = 'nsc';
		$mime['application/x-navidoc'] = 'nvd';
		$mime['application/octet-stream'] = 'o';
		$mime['application/oda'] = 'oda';
		$mime['application/x-omc'] = 'omc';
		$mime['application/x-omcdatamaker'] = 'omcd';
		$mime['application/x-omcregerator'] = 'omcr';
		$mime['text/x-pascal'] = 'p';
		$mime['application/pkcs10'] = 'p10';
		$mime['application/x-pkcs10'] = 'p10';
		$mime['application/pkcs-12'] = 'p12';
		$mime['application/x-pkcs12'] = 'p12';
		$mime['application/x-pkcs7-signature'] = 'p7a';
		$mime['application/pkcs7-mime'] = 'p7c';
		$mime['application/x-pkcs7-mime'] = 'p7c';
		$mime['application/pkcs7-mime'] = 'p7m';
		$mime['application/x-pkcs7-mime'] = 'p7m';
		$mime['application/x-pkcs7-certreqresp'] = 'p7r';
		$mime['application/pkcs7-signature'] = 'p7s';
		$mime['application/pro_eng'] = 'part';
		$mime['text/pascal'] = 'pas';
		$mime['image/x-portable-bitmap'] = 'pbm';
		$mime['application/vnd.hp-pcl'] = 'pcl';
		$mime['application/x-pcl'] = 'pcl';
		$mime['image/x-pict'] = 'pct';
		$mime['image/x-pcx'] = 'pcx';
		$mime['chemical/x-pdb'] = 'pdb';
		$mime['application/pdf'] = 'pdf';
		$mime['audio/make'] = 'pfunk';
		$mime['audio/make.my.funk'] = 'pfunk';
		$mime['image/x-portable-graymap'] = 'pgm';
		$mime['image/x-portable-greymap'] = 'pgm';
		$mime['image/pict'] = 'pic';
		$mime['image/pict'] = 'pict';
		$mime['application/x-newton-compatible-pkg'] = 'pkg';
		$mime['application/vnd.ms-pki.pko'] = 'pko';
		$mime['text/plain'] = 'pl';
		$mime['text/x-script.perl'] = 'pl';
		$mime['application/x-pixclscript'] = 'plx';
		$mime['image/x-xpixmap'] = 'pm';
		$mime['text/x-script.perl-module'] = 'pm';
		$mime['application/x-pagemaker'] = 'pm4';
		$mime['application/x-pagemaker'] = 'pm5';
		$mime['image/png'] = 'png';
		$mime['application/x-portable-anymap'] = 'pnm';
		$mime['image/x-portable-anymap'] = 'pnm';
		$mime['application/mspowerpoint'] = 'pot';
		$mime['application/vnd.ms-powerpoint'] = 'pot';
		$mime['model/x-pov'] = 'pov';
		$mime['application/vnd.ms-powerpoint'] = 'ppa';
		$mime['image/x-portable-pixmap'] = 'ppm';
		$mime['application/mspowerpoint'] = 'pps';
		$mime['application/vnd.ms-powerpoint'] = 'pps';
		$mime['application/mspowerpoint'] = 'ppt';
		$mime['application/powerpoint'] = 'ppt';
		$mime['application/vnd.ms-powerpoint'] = 'ppt';
		$mime['application/x-mspowerpoint'] = 'ppt';
		$mime['application/mspowerpoint'] = 'ppz';
		$mime['application/x-freelance'] = 'pre';
		$mime['application/pro_eng'] = 'prt';
		$mime['application/postscript'] = 'ps';
		$mime['application/octet-stream'] = 'psd';
		$mime['paleovu/x-pv'] = 'pvu';
		$mime['application/vnd.ms-powerpoint'] = 'pwz';
		$mime['text/x-script.phyton'] = 'py';
		$mime['applicaiton/x-bytecode.python'] = 'pyc';
		$mime['audio/vnd.qcelp'] = 'qcp';
		$mime['x-world/x-3dmf'] = 'qd3';
		$mime['x-world/x-3dmf'] = 'qd3d';
		$mime['image/x-quicktime'] = 'qif';
		$mime['video/quicktime'] = 'qt';
		$mime['video/x-qtc'] = 'qtc';
		$mime['image/x-quicktime'] = 'qti';
		$mime['image/x-quicktime'] = 'qtif';
		$mime['audio/x-pn-realaudio'] = 'ra';
		$mime['audio/x-pn-realaudio-plugin'] = 'ra';
		$mime['audio/x-realaudio'] = 'ra';
		$mime['audio/x-pn-realaudio'] = 'ram';
		$mime['application/x-cmu-raster'] = 'ras';
		$mime['image/cmu-raster'] = 'ras';
		$mime['image/x-cmu-raster'] = 'ras';
		$mime['image/cmu-raster'] = 'rast';
		$mime['text/x-script.rexx'] = 'rexx';
		$mime['image/vnd.rn-realflash'] = 'rf';
		$mime['image/x-rgb'] = 'rgb';
		$mime['application/vnd.rn-realmedia'] = 'rm';
		$mime['audio/x-pn-realaudio'] = 'rm';
		$mime['audio/mid'] = 'rmi';
		$mime['audio/x-pn-realaudio'] = 'rmm';
		$mime['audio/x-pn-realaudio'] = 'rmp';
		$mime['audio/x-pn-realaudio-plugin'] = 'rmp';
		$mime['application/ringing-tones'] = 'rng';
		$mime['application/vnd.nokia.ringing-tone'] = 'rng';
		$mime['application/vnd.rn-realplayer'] = 'rnx';
		$mime['application/x-troff'] = 'roff';
		$mime['image/vnd.rn-realpix'] = 'rp';
		$mime['audio/x-pn-realaudio-plugin'] = 'rpm';
		$mime['text/richtext'] = 'rt';
		$mime['text/vnd.rn-realtext'] = 'rt';
		$mime['application/rtf'] = 'rtf';
		$mime['application/x-rtf'] = 'rtf';
		$mime['text/richtext'] = 'rtf';
		$mime['application/rtf'] = 'rtx';
		$mime['text/richtext'] = 'rtx';
		$mime['video/vnd.rn-realvideo'] = 'rv';
		$mime['text/x-asm'] = 's';
		$mime['audio/s3m'] = 's3m';
		$mime['application/octet-stream'] = 'saveme';
		$mime['application/x-tbook'] = 'sbk';
		$mime['application/x-lotusscreencam'] = 'scm';
		$mime['text/x-script.guile'] = 'scm';
		$mime['text/x-script.scheme'] = 'scm';
		$mime['video/x-scm'] = 'scm';
		$mime['text/plain'] = 'sdml';
		$mime['application/sdp'] = 'sdp';
		$mime['application/x-sdp'] = 'sdp';
		$mime['application/sounder'] = 'sdr';
		$mime['application/sea'] = 'sea';
		$mime['application/x-sea'] = 'sea';
		$mime['application/set'] = 'set';
		$mime['text/sgml'] = 'sgm';
		$mime['text/x-sgml'] = 'sgm';
		$mime['text/sgml'] = 'sgml';
		$mime['text/x-sgml'] = 'sgml';
		$mime['application/x-bsh'] = 'sh';
		$mime['application/x-sh'] = 'sh';
		$mime['application/x-shar'] = 'sh';
		$mime['text/x-script.sh'] = 'sh';
		$mime['application/x-bsh'] = 'shar';
		$mime['application/x-shar'] = 'shar';
		$mime['text/html'] = 'shtml';
		$mime['text/x-server-parsed-html'] = 'shtml';
		$mime['audio/x-psid'] = 'sid';
		$mime['application/x-sit'] = 'sit';
		$mime['application/x-stuffit'] = 'sit';
		$mime['application/x-koan'] = 'skd';
		$mime['application/x-koan'] = 'skm';
		$mime['application/x-koan'] = 'skp';
		$mime['application/x-koan'] = 'skt';
		$mime['application/x-seelogo'] = 'sl';
		$mime['application/smil'] = 'smi';
		$mime['application/smil'] = 'smil';
		$mime['audio/basic'] = 'snd';
		$mime['audio/x-adpcm'] = 'snd';
		$mime['application/solids'] = 'sol';
		$mime['application/x-pkcs7-certificates'] = 'spc';
		$mime['text/x-speech'] = 'spc';
		$mime['application/futuresplash'] = 'spl';
		$mime['application/x-sprite'] = 'spr';
		$mime['application/x-sprite'] = 'sprite';
		$mime['application/x-wais-source'] = 'src';
		$mime['text/x-server-parsed-html'] = 'ssi';
		$mime['application/streamingmedia'] = 'ssm';
		$mime['application/vnd.ms-pki.certstore'] = 'sst';
		$mime['application/step'] = 'step';
		$mime['application/sla'] = 'stl';
		$mime['application/vnd.ms-pki.stl'] = 'stl';
		$mime['application/x-navistyle'] = 'stl';
		$mime['application/step'] = 'stp';
		$mime['application/x-sv4cpio'] = 'sv4cpio';
		$mime['application/x-sv4crc'] = 'sv4crc';
		$mime['
		image/vnd.dwg'] = 'svf';
		$mime['image/x-dwg'] = 'svf';
		$mime['application/x-world'] = 'svr';
		$mime['x-world/x-svr'] = 'svr';
		$mime['application/x-shockwave-flash'] = 'swf';
		$mime['application/x-troff'] = 't';
		$mime['text/x-speech'] = 'talk';
		$mime['application/x-tar'] = 'tar';
		$mime['application/toolbook'] = 'tbk';
		$mime['application/x-tbook'] = 'tbk';
		$mime['application/x-tcl'] = 'tcl';
		$mime['text/x-script.tcl'] = 'tcl';
		$mime['text/x-script.tcsh'] = 'tcsh';
		$mime['application/x-tex'] = 'tex';
		$mime['application/x-texinfo'] = 'texi';
		$mime['application/x-texinfo'] = 'texinfo';
		$mime['application/plain'] = 'text';
		$mime['text/plain'] = 'text';
		$mime['application/gnutar'] = 'tgz';
		$mime['application/x-compressed'] = 'tgz';
		$mime['image/tiff'] = 'tif';
		$mime['image/x-tiff'] = 'tif';
		$mime['image/tiff'] = 'tiff';
		$mime['image/x-tiff'] = 'tiff';
		$mime['application/x-troff'] = 'tr';
		$mime['audio/tsp-audio'] = 'tsi';
		$mime['application/dsptype'] = 'tsp';
		$mime['audio/tsplayer'] = 'tsp';
		$mime['text/tab-separated-values'] = 'tsv';
		$mime['image/florian'] = 'turbot';
		$mime['text/plain'] = 'txt';
		$mime['text/x-uil'] = 'uil';
		$mime['text/uri-list'] = 'uni';
		$mime['text/uri-list'] = 'unis';
		$mime['application/i-deas'] = 'unv';
		$mime['text/uri-list'] = 'uri';
		$mime['text/uri-list'] = 'uris';
		$mime['application/x-ustar'] = 'ustar';
		$mime['multipart/x-ustar'] = 'ustar';
		$mime['application/octet-stream'] = 'uu';
		$mime['text/x-uuencode'] = 'uu';
		$mime['text/x-uuencode'] = 'uue';
		$mime['application/x-cdlink'] = 'vcd';
		$mime['text/x-vcalendar'] = 'vcs';
		$mime['application/vda'] = 'vda';
		$mime['video/vdo'] = 'vdo';
		$mime['application/groupwise'] = 'vew';
		$mime['video/vivo'] = 'viv';
		$mime['video/vnd.vivo'] = 'viv';
		$mime['video/vivo'] = 'vivo';
		$mime['video/vnd.vivo'] = 'vivo';
		$mime['application/vocaltec-media-desc'] = 'vmd';
		$mime['application/vocaltec-media-file'] = 'vmf';
		$mime['audio/voc'] = 'voc';
		$mime['audio/x-voc'] = 'voc';
		$mime['video/vosaic'] = 'vos';
		$mime['audio/voxware'] = 'vox';
		$mime['audio/x-twinvq-plugin'] = 'vqe';
		$mime['audio/x-twinvq'] = 'vqf';
		$mime['audio/x-twinvq-plugin'] = 'vql';
		$mime['application/x-vrml'] = 'vrml';
		$mime['model/vrml'] = 'vrml';
		$mime['x-world/x-vrml'] = 'vrml';
		$mime['x-world/x-vrt'] = 'vrt';
		$mime['application/x-visio'] = 'vsd';
		$mime['application/x-visio'] = 'vst';
		$mime['application/x-visio'] = 'vsw';
		$mime['application/wordperfect6.0'] = 'w60';
		$mime['application/wordperfect6.1'] = 'w61';
		$mime['application/msword'] = 'w6w';
		$mime['audio/wav'] = 'wav';
		$mime['audio/x-wav'] = 'wav';
		$mime['application/x-qpro'] = 'wb1';
		$mime['image/vnd.wap.wbmp'] = 'wbmp';
		$mime['application/vnd.xara'] = 'web';
		$mime['application/msword'] = 'wiz';
		$mime['application/x-123'] = 'wk1';
		$mime['windows/metafile'] = 'wmf';
		$mime['text/vnd.wap.wml'] = 'wml';
		$mime['application/vnd.wap.wmlc'] = 'wmlc';
		$mime['text/vnd.wap.wmlscript'] = 'wmls';
		$mime['application/vnd.wap.wmlscriptc'] = 'wmlsc';
		$mime['application/msword'] = 'word';
		$mime['application/wordperfect'] = 'wp';
		$mime['application/wordperfect'] = 'wp5';
		$mime['application/wordperfect6.0'] = 'wp5';
		$mime['application/wordperfect'] = 'wp6';
		$mime['application/wordperfect'] = 'wpd';
		$mime['application/x-wpwin'] = 'wpd';
		$mime['application/x-lotus'] = 'wq1';
		$mime['application/mswrite'] = 'wri';
		$mime['application/x-wri'] = 'wri';
		$mime['application/x-world'] = 'wrl';
		$mime['model/vrml'] = 'wrl';
		$mime['x-world/x-vrml'] = 'wrl';
		$mime['model/vrml'] = 'wrz';
		$mime['x-world/x-vrml'] = 'wrz';
		$mime['text/scriplet'] = 'wsc';
		$mime['application/x-wais-source'] = 'wsrc';
		$mime['application/x-wintalk'] = 'wtk';
		$mime['image/x-xbitmap'] = 'xbm';
		$mime['image/x-xbm'] = 'xbm';
		$mime['image/xbm'] = 'xbm';
		$mime['video/x-amt-demorun'] = 'xdr';
		$mime['xgl/drawing'] = 'xgz';
		$mime['image/vnd.xiff'] = 'xif';
		$mime['application/excel'] = 'xl';
		$mime['application/excel'] = 'xla';
		$mime['application/x-excel'] = 'xla';
		$mime['application/x-msexcel'] = 'xla';
		$mime['application/excel'] = 'xlb';
		$mime['application/vnd.ms-excel'] = 'xlb';
		$mime['application/x-excel'] = 'xlb';
		$mime['application/excel'] = 'xlc';
		$mime['application/vnd.ms-excel'] = 'xlc';
		$mime['application/x-excel'] = 'xlc';
		$mime['application/excel'] = 'xld';
		$mime['application/x-excel'] = 'xld';
		$mime['application/excel'] = 'xlk';
		$mime['application/x-excel'] = 'xlk';
		$mime['application/excel'] = 'xll';
		$mime['application/vnd.ms-excel'] = 'xll';
		$mime['application/x-excel'] = 'xll';
		$mime['application/excel'] = 'xlm';
		$mime['application/vnd.ms-excel'] = 'xlm';
		$mime['application/x-excel'] = 'xlm';
		$mime['application/excel'] = 'xls';
		$mime['application/vnd.ms-excel'] = 'xls';
		$mime['application/x-excel'] = 'xls';
		$mime['application/x-msexcel'] = 'xls';
		$mime['application/excel'] = 'xlt';
		$mime['application/x-excel'] = 'xlt';
		$mime['application/excel'] = 'xlv';
		$mime['application/x-excel'] = 'xlv';
		$mime['application/excel'] = 'xlw';
		$mime['application/vnd.ms-excel'] = 'xlw';
		$mime['application/x-excel'] = 'xlw';
		$mime['application/x-msexcel'] = 'xlw';
		$mime['audio/xm'] = 'xm';
		$mime['application/xml'] = 'xml';
		$mime['text/xml'] = 'xml';
		$mime['xgl/movie'] = 'xmz';
		$mime['application/x-vnd.ls-xpix'] = 'xpix';
		$mime['image/x-xpixmap'] = 'xpm';
		$mime['image/xpm'] = 'xpm';
		$mime['image/png'] = 'x-png';
		$mime['video/x-amt-showrun'] = 'xsr';
		$mime['image/x-xwd'] = 'xwd';
		$mime['image/x-xwindowdump'] = 'xwd';
		$mime['chemical/x-pdb'] = 'xyz';
		$mime['application/x-compress'] = 'z';
		$mime['application/x-compressed'] = 'z';
		$mime['application/x-compressed'] = 'zip';
		$mime['application/x-zip-compressed'] = 'zip';
		$mime['application/zip'] = 'zip';
		$mime['multipart/x-zip'] = 'zip';
		$mime['application/octet-stream'] = 'zoo';
		$mime['text/x-script.zsh'] = 'zsh';		
		
		
		
		$retorno = array();
		
		foreach($mime as $mimetype => $extensao){
			if($extensao == $ext) $retorno[] = $mimetype;
		}
		
		return $retorno;
	}
}