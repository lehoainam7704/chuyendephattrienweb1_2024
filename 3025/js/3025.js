const testimonialGroups = document.querySelectorAll('.testimonial-group');
let currentGroup = 0;

document.getElementById('nextBtn').addEventListener('click', function () {
  testimonialGroups[currentGroup].classList.remove('active');
  currentGroup = (currentGroup + 1) % testimonialGroups.length;
  testimonialGroups[currentGroup].classList.add('active');
});

document.getElementById('prevBtn').addEventListener('click', function () {
  testimonialGroups[currentGroup].classList.remove('active');
  currentGroup = (currentGroup - 1 + testimonialGroups.length) % testimonialGroups.length;
  testimonialGroups[currentGroup].classList.add('active');
});
