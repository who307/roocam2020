Kakao.init('567c101359e55460b34ac6538bd648c4')
  
      Kakao.Channel.createAddChannelButton({
      container: '#create-channel-add-button',
      channelPublicId: '@roocam02',
    });
  
      Kakao.Auth.createLoginButton({
        container: '#create-kakao-login-btn',
        success: function (authObj) {
          location.href="../index.html"
          alert('로그인이 되었습니다.')
        }, fail: function (err) {
          alert(JSON.stringify(err))
        },
      });