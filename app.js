function getCookie(cookieName) {
    let cookie = {};
    document.cookie.split(';').forEach(function(el) {
      let [key,value] = el.split('=');
      cookie[key.trim()] = value;
    })
    return cookie[cookieName];
   
  }
let sign_out_sec = document.querySelector(".login_success");
  if(getCookie('login_info')== 'true') {
    sign_out_sec.style.display = "block";
  }
  else {
    sign_out_sec.style.display = "none";
  }