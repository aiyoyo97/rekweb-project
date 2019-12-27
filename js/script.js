function tampilkanSemuaMenu() {
	$.getJSON("data/bestseller.json", function(data) {
		let menu = data.menu;
		$.each(menu, function(i, data) {
			$("#daftar-menu").append(
				'<div class="col-md-4"><div class="card mb-3"><img src="img/fragrance/' +
					data.image +
					'" class="card-img-top"><div class="card-body"><h5 class="card-title">' +
					data.name +
					'</p><h5 class="card-title">Rp. ' +
					data.price +
					'</h5><a href="#" class="btn btn-primary">Add To Cart</a></div></div></div>'
			);
		});
	});
}

tampilkanSemuaMenu();

$(".nav-link").on("click", function() {
	$(".nav-link").removeClass("active");
	$(this).addClass("active");

	let category = $(this).html();
	$("h1").html(category);

	if (category == "All Menu") {
		tampilkanSemuaMenu();
		return;
	}

	$.getJSON("data/bestseller.json", function(data) {
		let menu = data.menu;
		let content = "";

		$.each(menu, function(i, data) {
			if (data.category == category.toLowerCase()) {
				content +=
					'<div class="col-md-4"><div class="card mb-3"><img src="img/fragrance/' +
					data.image +
					'" class="card-img-top"><div class="card-body"><h5 class="card-title">' +
					data.name +
					'</p><h5 class="card-title">Rp. ' +
					data.price +
					'</h5><a href="#" class="btn btn-primary">Add To Cart</a></div></div></div>';
			}
		});

		$("#daftar-menu").html(content);
	});
});
