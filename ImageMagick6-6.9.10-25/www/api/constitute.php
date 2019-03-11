



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,shrink-to-fit=no" >
  <title>MagickCore, C API: Constitute an Image @ ImageMagick</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="Use ImageMagick® to create, edit, compose, convert bitmap images. With ImageMagick you can resize your image, crop it, change its shades and colors, add captions, among other operations.">
  <meta name="application-url" content="https://imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickcore, c, api:, constitute, an, image, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
  <meta name="rating" content="GENERAL">
  <meta name="robots" content="INDEX, FOLLOW">
  <meta name="generator" content="ImageMagick Studio LLC">
  <meta name="author" content="ImageMagick Studio LLC">
  <meta name="revisit-after" content="2 DAYS">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Copyright (c) 1999-2017 ImageMagick Studio LLC">
  <meta name="distribution" content="Global">
  <meta name="magick-serial" content="P131-S030410-R485315270133-P82224-A6668-G1245-1">
  <meta name="google-site-verification" content="_bMOCDpkx9ZAzBwb2kF3PRHbfUUdFj2uO8Jd1AXArz4">
  <link href="https://imagemagick.org/api/constitute.php" rel="canonical">
  <link href="../image/wand.png" rel="icon">
  <link href="../image/wand.ico" rel="shortcut icon">
  <link href="../assets/magick-css.php" rel="stylesheet">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="../index.html"><img class="d-block" id="wand" alt="ImageMagick" width="32" height="32" src="../image/wand.ico"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/download.php">Download</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/command-line-tools.php">Tools</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/command-line-processing.php">Command-line</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/resources.php">Resources</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/develop.php">Develop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://imagemagick.org/discourse-server/">Community</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="../script/search.php">
      <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sa">Search</button>
    </form>
    </div>
  </nav>
  <div class="container">
   <script async="async" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3129977114552745"
         data-ad-slot="6345125851"
         data-ad-format="auto"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
  </header>
  <main class="container">
    <div class="magick-template">
<div class="magick-header">
<p class="text-center"><a href="constitute.php#ConstituteImage">ConstituteImage</a> &bull; <a href="constitute.php#PingImage">PingImage</a> &bull; <a href="constitute.php#PingImages">PingImages</a> &bull; <a href="constitute.php#ReadImage">ReadImage</a> &bull; <a href="constitute.php#ReadImages">ReadImages</a> &bull; <a href="constitute.php#WriteImage">WriteImage</a> &bull; <a href="constitute.php#WriteImages">WriteImages</a></p>

<h2><a href="https://imagemagick.org/api/MagickCore/constitute_8c.html" id="ConstituteImage">ConstituteImage</a></h2>

<p>ConstituteImage() returns an image from the pixel data you supply. The pixel data must be in scanline order top-to-bottom.  The data can be char, short int, int, float, or double.  Float and double require the pixels to be normalized [0..1], otherwise [0..QuantumRange].  For example, to create a 640x480 image from unsigned red-green-blue character data, use:</p>

<pre class="text">
image = ConstituteImage(640,480,"RGB",CharPixel,pixels,&amp;exception);
</pre>

<p>The format of the ConstituteImage method is:</p>

<pre class="text">
Image *ConstituteImage(const size_t columns,const size_t rows,
  const char *map,const StorageType storage,const void *pixels,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>columns</dt>
<dd>width in pixels of the image. </dd>

<dd> </dd>
<dt>rows</dt>
<dd>height in pixels of the image. </dd>

<dd> </dd>
<dt>map</dt>
<dd> This string reflects the expected ordering of the pixel array. It can be any combination or order of R = red, G = green, B = blue, A = alpha (0 is transparent), O = opacity (0 is opaque), C = cyan, Y = yellow, M = magenta, K = black, I = intensity (for grayscale), P = pad. </dd>

<dd> </dd>
<dt>storage</dt>
<dd>Define the data type of the pixels.  Float and double types are expected to be normalized [0..1] otherwise [0..QuantumRange].  Choose from these types: CharPixel, DoublePixel, FloatPixel, IntegerPixel, LongPixel, QuantumPixel, or ShortPixel. </dd>

<dd> </dd>
<dt>pixels</dt>
<dd>This array of values contain the pixel components as defined by map and type.  You must preallocate this array where the expected length varies depending on the values of width, height, map, and type. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/constitute_8c.html" id="PingImage">PingImage</a></h2>

<p>PingImage() returns all the properties of an image or image sequence except for the pixels.  It is much faster and consumes far less memory than ReadImage().  On failure, a NULL image is returned and exception describes the reason for the failure.</p>

<p>The format of the PingImage method is:</p>

<pre class="text">
Image *PingImage(const ImageInfo *image_info,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_info</dt>
<dd>Ping the image defined by the file or filename members of this structure. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/constitute_8c.html" id="PingImages">PingImages</a></h2>

<p>PingImages() pings one or more images and returns them as an image list.</p>

<p>The format of the PingImage method is:</p>

<pre class="text">
Image *PingImages(const ImageInfo *image_info,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_info</dt>
<dd>the image info. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/constitute_8c.html" id="ReadImage">ReadImage</a></h2>

<p>ReadImage() reads an image or image sequence from a file or file handle. The method returns a NULL if there is a memory shortage or if the image cannot be read.  On failure, a NULL image is returned and exception describes the reason for the failure.</p>

<p>The format of the ReadImage method is:</p>

<pre class="text">
Image *ReadImage(const ImageInfo *image_info,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_info</dt>
<dd>Read the image defined by the file or filename members of this structure. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/constitute_8c.html" id="ReadImages">ReadImages</a></h2>

<p>ReadImages() reads one or more images and returns them as an image list.</p>

<p>The format of the ReadImage method is:</p>

<pre class="text">
Image *ReadImages(const ImageInfo *image_info,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_info</dt>
<dd>the image info. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/constitute_8c.html" id="WriteImage">WriteImage</a></h2>

<p>WriteImage() writes an image or an image sequence to a file or file handle. If writing to a file is on disk, the name is defined by the filename member of the image structure.  WriteImage() returns MagickFalse is there is a memory shortage or if the image cannot be written.  Check the exception member of image to determine the cause for any failure.</p>

<p>The format of the WriteImage method is:</p>

<pre class="text">
MagickBooleanType WriteImage(const ImageInfo *image_info,Image *image)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_info</dt>
<dd>the image info. </dd>

<dd> </dd>
<dt>image</dt>
<dd>the image. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/constitute_8c.html" id="WriteImages">WriteImages</a></h2>

<p>WriteImages() writes an image sequence into one or more files.  While WriteImage() can write an image sequence, it is limited to writing the sequence into a single file using a format which supports multiple frames.   WriteImages(), however, does not have this limitation, instead it generates multiple output files if necessary (or when requested).  When ImageInfo's adjoin flag is set to MagickFalse, the file name is expected to include a printf-style formatting string for the frame number (e.g. "image02d.png").</p>

<p>The format of the WriteImages method is:</p>

<pre class="text">
MagickBooleanType WriteImages(const ImageInfo *image_info,Image *images,
  const char *filename,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_info</dt>
<dd>the image info. </dd>

<dd> </dd>
<dt>images</dt>
<dd>the image list. </dd>

<dd> </dd>
<dt>filename</dt>
<dd>the image filename. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
</div>
    </div>
  </main><!-- /.container -->
  <footer class="magick-footer">
    <p><a href="../script/security-policy.php">Security</a> •
    <a href="../script/architecture.php">Architecture</a> •
    <a href="../script/links.php">Related</a> •
     <a href="../script/sitemap.php">Sitemap</a>
    &nbsp; &nbsp;
    <a href="constitute.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="../image/wand.ico"/></a>
    &nbsp; &nbsp;
    <a href="http://pgp.mit.edu/pks/lookup?op=get&amp;search=0x89AB63D48277377A">Public Key</a> •
    <a href="../script/support.php">Donate</a> •
    <a href="../script/contact.php">Contact Us</a>
    <br/>
        <small>© 1999-2019 ImageMagick Studio LLC</small></p>
  </footer>

  <!-- Javascript assets -->
  <script src="../assets/magick-js.php" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/jquery.min.js"><\/script>')</script>
</body>
</html>