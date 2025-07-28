
  <style>
    /* Loader backdrop */
    #loader-backdrop {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.9);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      display: none;
    }

    #loader-backdrop img {
      width: 650px;
      height: 400px;
      animation: zoomIn 0.4s ease-in-out forwards;
    }
  #loader-backdrop2 {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.9);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      display: none;
    }
 #loader-backdrop img {
  width: 650px;
      height: 200px;
  animation: zoomIn 0.4s ease-in-out forwards,
             bounce 0.8s ease-in-out 0.4s 2,
             fadeGlow 2s ease-in-out infinite;
}

@keyframes zoomIn {
  from {
    transform: scale(0.3);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes fadeGlow {
  0%, 100% {
    filter: drop-shadow(0 0 0px rgba(255, 255, 255, 0.4));
  }
  50% {
    filter: drop-shadow(0 0 10px rgba(255, 255, 255, 1));
  }
}
@keyframes fadeGlow2 {
  0%, 100% {
    filter: drop-shadow(0 0 0px rgba(255, 255, 255, 0.4));
  }
  50% {
    filter: drop-shadow(0 0 10px rgb(2, 2, 2));
  }
}
    #loader-backdrop2 img {
  width: 650px;
      height: 200px;
  animation: zoomIn 0.4s ease-in-out forwards,
             bounce 0.8s ease-in-out 0.4s 2,
             fadeGlow2 2s ease-in-out infinite;
}

@keyframes zoomIn {
  from {
    transform: scale(0.3);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes fadeGlow {
  0%, 100% {
    filter: drop-shadow(0 0 0px rgba(255, 255, 255, 0.4));
  }
  50% {
    filter: drop-shadow(0 0 10px rgba(255, 255, 255, 1));
  }
}


   
  </style>
</head>
<body>

  <div id="loader-backdrop">
      <img src="{{ asset('images/branding.png') }}" alt="Loading...">
  </div>
<div id="loader-backdrop2">
      <img src="{{ asset('images/branding3.png') }}" alt="Loading...">
  </div>
  <script>
    function navigateWithLoader(url) {
      const loader = document.getElementById('loader-backdrop');
      loader.style.display = 'flex';

      setTimeout(() => {
        window.location.href = url;
      }, 2500); 
    }
    function navigateWithLoader2(url) {
      const loader = document.getElementById('loader-backdrop2');
      loader.style.display = 'flex';

      setTimeout(() => {
        window.location.href = url;
      }, 2500); 
    }
  </script>

</body>

