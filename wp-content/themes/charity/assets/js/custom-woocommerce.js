jQuery(function(a) {
	a(".woocommerce-ordering").on("change", "select.orderby", function() {
		a(this).closest("form").submit()
	}), a("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").addClass("buttons_added").append('<input type="button" value="+" class="plus" />').prepend('<input type="button" value="-" class="minus" />'), a("input.qty:not(.product-quantity input.qty)").each(function() {
		var b = parseFloat(a(this).attr("min"));
		b && b > 0 && parseFloat(a(this).val()) < b && a(this).val(b)
	}), a(document).on("click", ".plus, .minus", function() {
		var b = a(this).closest(".quantity").find(".qty"), c = parseFloat(b.val()), d = parseFloat(b.attr("max")), e = parseFloat(b.attr("min")), f = b.attr("step");
		c && "" !== c && "NaN" !== c || ( c = 0), ("" === d || "NaN" === d) && ( d = ""), ("" === e || "NaN" === e) && ( e = 0), ("any" === f || "" === f ||
		void 0 === f || "NaN" === parseFloat(f)) && ( f = 1), a(this).is(".plus") ? b.val(d && (d == c || c > d) ? d : c + parseFloat(f)) : e && (e == c || e > c) ? b.val(e) : c > 0 && b.val(c - parseFloat(f)), b.trigger("change")
	})
}); 


