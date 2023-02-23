<!DOCTYPE html>
<html>
<head>
<title>
    Rental Indonesia Event Support
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

*, *:before, *:after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

#container {
    height: 100%;
    background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
    display: block;
    margin: auto auto;
    text-align: center;
    position: relative;
}

#container #btn {
  position: absolute;
  top: 60%;
  left: 50%;
  display: block;
  transform: translate(-50%, -45%);
  cursor: pointer;
  text-align: center;
}

#inner {
    height:100%;
    padding:0 0;
}

a {
    max-height: 100%;
    width: auto;
}
img {
    max-height:100%;
    max-width:100%;
}

.bg-image:before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: -1;
    background-image: url({{ asset('bndasdasdnada.jpeg') }});
    background-position: left top;
    background-repeat: repeat;
    background-attachment: fixed;  
    height: 100%;
    filter: blur(5px);
    -webkit-filter: blur(5px);
    -moz-filter: blur(5px);
    -o-filter: blur(5px);
    -ms-filter: blur(5px);
}

</style>
</head>
<body>
  <div class="bg-image"></div>

  <div id="container">
      <img src="{{ asset('bndasdasdnada.jpeg') }}"/>
      <div id="btn">
        <a href="{{ route('registrasi.create') }}" class="btn btn-primary">Registrasi</a>
        <a href="{{ asset('HANDBOOKSILATNAS.pdf') }}" target="_blank" class="btn btn-primary">PDF</a>
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>