window.document.onscroll = () => {
  let y = window.pageYOffset;
  if (y >= 150) {
    $('#logo').attr('src', './image/logo-b.png')
  } else {
    $('#logo').attr('src', '')
  }
}
