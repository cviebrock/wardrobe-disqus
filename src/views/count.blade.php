<script type="text/javascript">
	var disqus_shortname = '{{ $disqus_shortname }}';
@if( $disqus_identifier )
	var disqus_identifier = '{{ $disqus_identifier }}';
@endif
	(function (d) {
		var dsc = d.createElement('script'); dsc.type = 'text/javascript'; dsc.async = true;
		dsc.src = '//' + disqus_shortname + '.disqus.com/count.js';
		(d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(dsc);
	}(document));
</script>