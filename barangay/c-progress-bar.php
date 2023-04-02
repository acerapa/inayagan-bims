<div class="sk-progress-bar" id="ioavg6zx" style="opacity: 0;">
  <div class="progress-bar">
    <div class="progress-bar-value"></div>
  </div>
</div>

<style type="text/css">
  .sk-progress-bar {
    position: fixed;
    width: 100vw;
    height: 2px;
    z-index: 1060;
  }

  .progress-bar {
    height: 2px;
    background-color: rgba(5, 114, 206, 0.2);
    width: 100%;
    overflow: hidden;
  }

  .progress-bar-value {
    width: 100%;
    height: 100%;
    background-color: rgb(253 126 20);
    animation: indeterminateAnimation 1.5s infinite linear;
    transform-origin: 0% 50%;
  }

  @keyframes indeterminateAnimation {
    0% {
      transform:  translateX(0) scaleX(0);
    }
    40% {
      transform:  translateX(0) scaleX(0.4);
    }
    100% {
      transform:  translateX(100%) scaleX(0.5);
    }
  }
</style>

<script type="text/javascript">

	function showLoading() { $("#ioavg6zx").css({'opacity': 1}); }
  function hideLoading() { $("#ioavg6zx").css({'opacity': 0}); }

</script>