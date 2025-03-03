export function projectClose() {
    const projectCloseBut = document.querySelector('.close-button');

    function closeProject() {
        history.back();
    }

projectCloseBut.addEventListener('click', closeProject);
}