<div id="disqus_thread"></div>
<script type="text/javascript">
	var disqus_shortname = '{{ $disqus_shortname }}';
@if( $disqus_identifier )
	var disqus_identifier = '{{ $disqus_identifier }}';
@endif
@if( $disqus_url )
	var disqus_url = '{{ $disqus_url }}';
@endif
	(function(d) {
		var dsq = d.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
		(d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(dsq);
	})(document);
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
