  <div class="container main">
  <h2>ಗ್ಯಾಲರಿ</h2><br />
  	<div class="row gallery">
      <div class="col-md-6"><a href="<?=BASE_URL?>Gallery/Awards"><img src="<?=PUBLIC_URL?>images/gallery/main/001/0027.jpg" alt="" /><br /><h3>ಪ್ರಶಸ್ತಿ ಪ್ರದಾನ ಸಮಾರಂಭಗಳು</h3></a></div> 
      <div class="col-md-6"><a href="<?=BASE_URL?>Gallery/Books"><img src="<?=PUBLIC_URL?>images/gallery/main/002/0003.jpg" alt="" /><br /><h3>ಪುಸ್ತಕ ಬಿಡುಗಡೆ ಸಮಾರಂಭಗಳು</h3></a></div> 
    </div>
  </div>

  <!-- Scripts -->
  <script>
  	$(window).on('load', function(){
  // jQuery(window).load(function () {
  	var vieweroptions = {
  // inline: true,
  url: 'data-original',
  ready:  function (e) {
  	console.log(e.type);
  },
  show:  function (e) {
  	console.log(e.type);
  },
  shown:  function (e) {
  	console.log(e.type);
  },
  hide:  function (e) {
  	console.log(e.type);
  },
  hidden:  function (e) {
  	console.log(e.type);
  },
  view:  function (e) {
  	console.log(e.type, e.detail.index);
  },
  viewed:  function (e) {
  	console.log(e.type, e.detail.index);
  // this.viewer.zoomTo(1).rotateTo(180);
}
};

var viewer = new Viewer(document.getElementById('imageview'),vieweroptions);
});
</script>