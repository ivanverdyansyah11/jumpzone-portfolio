const zoneTop = document.querySelectorAll('.zone-top');
const zoneTopTitle = document.querySelector('.zone-top-title');
const zoneTopDescription = document.querySelector('.zone-top-description');
const zoneTopTitleModal = document.querySelector('.modal-top-title');
const zoneTopDescriptionModal = document.querySelector('.modal-top-description');

const zoneBottom = document.querySelectorAll('.zone-bottom');
const zoneBottomTitle = document.querySelector('.zone-bottom-title');
const zoneBottomDescription = document.querySelector('.zone-bottom-description');
const zoneBottomTitleModal = document.querySelector('.modal-bottom-title');
const zoneBottomDescriptionModal = document.querySelector('.modal-bottom-description');

zoneTop.forEach(element => {
    element.addEventListener('click', function() {
        let zoneTitle = element.querySelector('.zone-title');
        if (zoneTitle.innerHTML === 'Open Bounce Zone') {
            // CHANGE STYLE TITLE SELECTED ZONE
            zoneTitle.classList.add('active');
            
            // CHANGE DATA ZONE SELECTED
            zoneTopTitle.innerHTML = 'Open Bounce Zone';
            zoneTopDescription.innerHTML = "Jump, bounce, and let your imagination soar in the Open Bounce Zone at JumpZone. This expansive trampoline area is perfect for freestyle jumping, practicing tricks, and enjoying the pure thrill of bouncing to your heart's content.";
            zoneTopTitleModal.innerHTML = 'Open Bounce Zone';
            zoneTopDescriptionModal.innerHTML = "Jump, bounce, and let your imagination soar in the Open Bounce Zone at JumpZone. This expansive trampoline area is perfect for freestyle jumping, practicing tricks, and enjoying the pure thrill of bouncing to your heart's content.";
            
            // REMOVE OTHER SIDE ZONE
            const otherZone = element.parentElement.children[1];
            const otherTitle = otherZone.children[1];
            otherTitle.classList.remove('active');
            
        } else {
            // CHANGE STYLE TITLE SELECTED ZONE
            zoneTitle.classList.add('active');
            
            // CHANGE DATA ZONE SELECTED
            zoneTopTitle.innerHTML = 'Foam Pit Zone';
            zoneTopDescription.innerHTML = "Dive into a sea of soft foam cubes in the Foam Pit Zone. Jump, flip, and experience the sensation of weightlessness as you launch yourself into the air and land safely in the foam-filled pit. It's an exhilarating and cushioned landing that adds an extra element of excitement to your trampoline experience.";
            zoneTopTitleModal.innerHTML = 'Foam Pit Zone';
            zoneTopDescriptionModal.innerHTML = "Dive into a sea of soft foam cubes in the Foam Pit Zone. Jump, flip, and experience the sensation of weightlessness as you launch yourself into the air and land safely in the foam-filled pit. It's an exhilarating and cushioned landing that adds an extra element of excitement to your trampoline experience.";
            
            // REMOVE OTHER SIDE ZONE
            const otherZone = element.parentElement.children[0];
            const otherTitle = otherZone.children[1];
            otherTitle.classList.remove('active');
        }
    });
});

zoneBottom.forEach(element => {
    element.addEventListener('click', function() {
        let zoneTitle = element.querySelector('.zone-title');
        if (zoneTitle.innerHTML === 'Slam Dunk Zone') {
            // CHANGE STYLE TITLE SELECTED ZONE
            zoneTitle.classList.add('active');
            
            // CHANGE DATA ZONE SELECTED
            zoneBottomTitle.innerHTML = 'Slam Dunk Zone';
            zoneBottomDescription.innerHTML = "Feel like an NBA superstar as you soar through the air and slam dunk like a pro in the Slam Dunk Zone. This dedicated area features specially designed trampolines and basketball hoops, allowing you to perform gravity-defying dunks and showcase your basketball skills. It's an opportunity to feel the rush of being airborne and make those amazing slam dunks you've always dreamed of.";
            zoneBottomTitleModal.innerHTML = 'Slam Dunk Zone';
            zoneBottomDescriptionModal.innerHTML = "Feel like an NBA superstar as you soar through the air and slam dunk like a pro in the Slam Dunk Zone. This dedicated area features specially designed trampolines and basketball hoops, allowing you to perform gravity-defying dunks and showcase your basketball skills. It's an opportunity to feel the rush of being airborne and make those amazing slam dunks you've always dreamed of.";
            
            // REMOVE OTHER SIDE ZONE
            const otherZone = element.parentElement.children[1];
            const otherTitle = otherZone.children[1];
            otherTitle.classList.remove('active');
            
        } else {
            // CHANGE STYLE TITLE SELECTED ZONE
            zoneTitle.classList.add('active');
            
            // CHANGE DATA ZONE SELECTED
            zoneBottomTitle.innerHTML = 'Dodgeball Arena';
            zoneBottomDescription.innerHTML = "Get ready to unleash your competitive side in the Dodgeball Arena. Gather your friends, form teams, and engage in epic dodgeball battles on the trampolines. Jump, dodge, and throw with precision as you enjoy the fast-paced and high-flying action of trampoline dodgeball.";
            zoneBottomTitleModal.innerHTML = 'Dodgeball Arena';
            zoneBottomDescriptionModal.innerHTML = "Get ready to unleash your competitive side in the Dodgeball Arena. Gather your friends, form teams, and engage in epic dodgeball battles on the trampolines. Jump, dodge, and throw with precision as you enjoy the fast-paced and high-flying action of trampoline dodgeball.";
            
            // REMOVE OTHER SIDE ZONE
            const otherZone = element.parentElement.children[2];
            const otherTitle = otherZone.children[1];
            otherTitle.classList.remove('active');
        }
    });
});