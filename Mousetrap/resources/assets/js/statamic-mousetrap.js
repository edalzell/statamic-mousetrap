function redirectToContent() {
	window.location.href = Trap.edit_url;
}
Mousetrap.bind('esc', redirectToContent );