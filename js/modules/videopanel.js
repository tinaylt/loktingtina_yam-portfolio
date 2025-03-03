export function video() {

    const videoCon = document.querySelector('#video-container');
    const player = document.querySelector('#video-container video');
    const videoPanel = document.querySelector('#video-controls');
    const playButton = document.querySelector('#play-button');
    const pauseButton = document.querySelector('#pause-button');
    const stopButton = document.querySelector('#stop-button');
    const volumeSlider = document.querySelector('#change-vol');

    player.controls = false;
    videoPanel.classList.remove('hidden');

    function playVideo() {
        player.play();
    };

    function pauseVideo() {
        player.pause();
    };

    function stopVideo() {
        player.pause();
        player.currentTime = 1;
    };

    function changeVolume() {
        player.volume = volumeSlider.value;
    };

    function hidePanel() {
        videoPanel.classList.add('hide');
    };

    function showPanel() {
        videoPanel.classList.remove('hide');
    };
    
    playButton.addEventListener('click', playVideo);
    pauseButton.addEventListener('click', pauseVideo);
    stopButton.addEventListener('click', stopVideo);
    volumeSlider.addEventListener('change', changeVolume);

    videoPanel.addEventListener('mouseenter', showPanel);
    videoPanel.addEventListener('mouseleave', hidePanel);
    player.addEventListener('mouseenter', showPanel);
    player.addEventListener('mouseleave', hidePanel);


}