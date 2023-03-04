<?php
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCqBJzNFXshu3rc_uJkceHyw&key=AIzaSyBSZZ2RDuO0WpeVST7O8efYc3nT_N6c9LU');


$ytProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$chName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

// latest video
// $urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBSZZ2RDuO0WpeVST7O8efYc3nT_N6c9LU&channelId=UCqBJzNFXshu3rc_uJkceHyw&maxResults=1&order=date&part=snippet';
// $result = get_CURL($urlLatestVideo);
// $latestVideoId = $result['items'][0]['id']['videoId'];
// kemudian, panggil $latestVideoId di html, gantikan id video nya

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My Portfolio | Darul Annas Septihan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <!-- end bootstrap icons -->

  <!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- end aos -->

  <!-- my css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- end my css -->
</head>

<body id="home">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Darul Annas Septihan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- jumbotron -->
  <section class="jumbotron text-center">
    <img src="img/profil-image.jpeg" alt="darul annas" width="200" class="rounded-circle img-thumbnail" />
    <h1 class="display-4">Darul Annas Septihan</h1>
    <p class="lead"></p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,224L80,202.7C160,181,320,139,480,138.7C640,139,800,181,960,202.7C1120,224,1280,224,1360,224L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
  </section>
  <!-- end jumbotron -->

  <!-- about -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-4" data-aos="fade-right" data-aos-duration="1000">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis nobis sapiente veritatis nam explicabo blanditiis aspernatur impedit repellendus nostrum assumenda.</p>
        </div>
        <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae facere eveniet rem vitae, dolore unde, distinctio provident deleniti esse veniam itaque perferendis minima incidunt similique.</p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#e2edff" fill-opacity="1" d="M0,192L80,186.7C160,181,320,171,480,181.3C640,192,800,224,960,229.3C1120,235,1280,213,1360,202.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
  </section>
  <!-- end about -->

  <!-- youtube & ig -->
  <section class="social" id="social">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Social Media</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5">
        <div class="col-md-4" data-aos="fade-right" data-aos-duration="1000">
          <div class="row">
            <div class="col-md-4">
              <img src="<?= $ytProfilePic; ?>" width="200" class="rounded-circle img-thumbnail">
            </div>
            <div class="col-md-8">
              <h5><?= $chName; ?></h5>
              <p><?= $subscriber; ?> Subscribers</p>
              <div class="g-ytsubscribe" data-channelid="UCqBJzNFXshu3rc_uJkceHyw" data-layout="default" data-count="default"></div>
            </div>
          </div>
          <div class="row mt-3 pb-3">
            <div class="col">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-BmTKA1xCm8?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
          <div class="row">
            <div class="col-md-4">
              <img src="img/profil-image.jpeg" width="200" class="rounded-circle img-thumbnail">
            </div>
            <div class="col-md-8">
              <h5>@rekamjejakit</h5>
              <p>7000 Followers</p>
            </div>
          </div>

          <div class="row mt-3 pb-3">
            <div class="col">
              <div class="ig-thumbnail">
                <img src="img/webiec.png" width="100">
              </div>
              <div class="ig-thumbnail">
                <img src="img/webiec.png" width="100">
              </div>
              <div class="ig-thumbnail">
                <img src="img/webiec.png" width="100">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- projects -->
  <section id="projects">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>My Projects</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-duration="500">
            <img src="img/projects/1.jpg" class="card-img-top" alt="project1" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="100">
            <img src="img/projects/2.jpg" class="card-img-top" alt="project2" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="200">
            <img src="img/projects/3.jpg" class="card-img-top" alt="project3" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,224L80,224C160,224,320,224,480,218.7C640,213,800,203,960,192C1120,181,1280,171,1360,165.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
  </section>
  <!-- end projects -->

  <!-- gallery -->
  <section id="gallery">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Gallery</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3">
          <a href="#">
            <img src="img/gallery/thumbnail/1.jpg" alt="gambar1" class="img-fluid gallery-img" />
          </a>
        </div>
        <div class="col-md-3">
          <a href="#">
            <img src="img/gallery/thumbnail/2.jpg" alt="gambar2" class="img-fluid gallery-img" />
          </a>
        </div>
        <div class="col-md-3">
          <a href="#">
            <img src="img/gallery/thumbnail/3.jpg" alt="gambar3" class="img-fluid gallery-img" />
          </a>
        </div>
        <div class="col-md-3">
          <a href="#">
            <img src="img/gallery/thumbnail/4.jpg" alt="gambar4" class="img-fluid gallery-img" />
          </a>
        </div>
        <div class="col-md-3">
          <a href="#">
            <img src="img/gallery/thumbnail/5.jpg" alt="gambar5" class="img-fluid gallery-img" />
          </a>
        </div>
        <div class="col-md-3">
          <a href="#">
            <img src="img/gallery/thumbnail/6.jpg" alt="gambar6" class="img-fluid gallery-img" />
          </a>
        </div>
        <div class="col-md-3">
          <a href="#">
            <img src="img/gallery/thumbnail/7.jpg" alt="gambar7" class="img-fluid gallery-img" />
          </a>
        </div>
        <div class="col-md-3">
          <a href="#">
            <img src="img/gallery/thumbnail/8.jpg" alt="gambar8" class="img-fluid gallery-img" />
          </a>
        </div>
        <div class="col-md-3">
          <a href="#">
            <img src="img/gallery/thumbnail/9.jpg" alt="gambar9" class="img-fluid gallery-img" />
          </a>
        </div>
        <div class="col-md-3">
          <a href="#">
            <img src="img/gallery/thumbnail/10.jpg" alt="gambar10" class="img-fluid gallery-img" />
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end gallery -->

  <!-- contact -->
  <section id="contact">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
            <strong>Terima kasih!</strong> Pesan anda sudah saya terima.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <form name="contact-form">
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>
            <button class="btn btn-primary btn-loading d-none" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Loading...
            </button>
          </form>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#0d6efd" fill-opacity="1" d="M0,192L80,208C160,224,320,256,480,250.7C640,245,800,203,960,202.7C1120,203,1280,245,1360,266.7L1440,288L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
  </section>
  <!-- end contact -->

  <!-- footer -->
  <footer class="bg-primary text-white text-center pb-5">
    <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a class="text-white fw-bold">Darul Annas Septihan</a></p>
  </footer>
  <!-- end footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- js aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    const galleryImage = document.querySelectorAll(".gallery-img");

    galleryImage.forEach((img, i) => {
      img.dataset.aos = "fade-down";
      img.dataset.aosDelay = i * 100;
      img.dataset.aosDuration = 1000;
    });

    AOS.init({
      once: true,
      duration: 2000,
    });
  </script>
  <!-- end js aos -->

  <!-- js gsap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/TextPlugin.min.js"></script>
  <script>
    gsap.registerPlugin(TextPlugin);
    gsap.to(".lead", {
      duration: 2,
      delay: 1.5,
      text: "IT Support | Network Engineer | Web Developer"
    });
    gsap.from(".jumbotron img", {
      duration: 1,
      rotateY: 360,
      opacity: 0
    });
    gsap.from(".navbar", {
      duration: 1.5,
      y: "-100%",
      opacity: 0,
      ease: "bounce"
    });
    gsap.from(".display-4", {
      duration: 1,
      x: -50,
      opacity: 0,
      delay: 0.5,
      ease: "back"
    });
  </script>
  <!-- end js gsap -->

  <!-- js contact form -->
  <script>
    const scriptURL = "https://script.google.com/macros/s/AKfycbyD5CkYtopDADH_P0GvM1qo0ZQ7eUAZFstE7HWoK_7buttusDhjzynWM5rrTlxxtADKaQ/exec";
    const form = document.forms["contact-form"];
    const btnKirim = document.querySelector(".btn-kirim");
    const btnLoading = document.querySelector(".btn-loading");
    const myAlert = document.querySelector(".my-alert");

    form.addEventListener("submit", (e) => {
      e.preventDefault();
      // on btn submit
      // show btn loading, clear btn kirim
      btnLoading.classList.toggle("d-none");
      btnKirim.classList.toggle("d-none");
      fetch(scriptURL, {
          method: "POST",
          body: new FormData(form)
        })
        .then((response) => {
          // show btn kirim, clear btn loading
          btnLoading.classList.toggle("d-none");
          btnKirim.classList.toggle("d-none");
          // show alert
          myAlert.classList.toggle("d-none");
          // reset form
          form.reset();
          console.log("Success!", response);
        })
        .catch((error) => console.error("Error!", error.message));
    });
  </script>
  <!-- end js contact form -->

  <!-- js yt -->
  <script src="https://apis.google.com/js/platform.js"></script>
</body>

</html>