<script >
	const btn = document.querySelector('.mobile-sidebar');
	const sidebar = document.querySelector('.sidebar');

	btn.addEventListener('click',() => {
	sidebar.classList.toggle('-translate-x-full');
	});
</script>