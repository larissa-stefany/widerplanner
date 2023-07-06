<style>
	section.card {
		background: #f6f6f6;
		height: 150px;
		border-radius: 10px;
		padding: 1px 48px 48px 308px;
		margin: 84px 0;
		width: 40px;
		min-width: 180px;
		display: flex;
		flex-direction: row;
		align-self: flex-start;
		position: relative;
		box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
	}

	section.card .text-content a {
		border: 3px solid #344966;
		color: #344966;
		align-self: flex-start;
		text-decoration: none;
		padding: 16px 32px;
		border-radius: 12px;
		transition: 400ms all;
	}

	section.card .text-content a:hover {
		background: #344966;
		color: white;
	}

	section.card .visual {
		width: 190px;
		height: 100%;
		position: absolute;
		top: -24px;
		left: 24px;
		overflow: hidden;
		border-radius: 24px;
		box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
	}

	section.card .visual img {
		height: 100%;
	}

	section.card:nth-of-type(odd) {
		margin: 0 0 0 248px;
		padding: 1px 250px 48px 68px;
	}

	section.card:nth-of-type(odd) .visual {
		right: 24px;
		left: auto;
	}

	section.card:nth-of-type(odd) .text-content a {
		align-self: flex-start;
	}
</style>

<article>
	<section class="card">
		<div class="text-content">
			<h3 style="font-size:14px">Elevate Your Brand with Exceptional Design</h3><br><br>
			<a href="#">Agendar</a>
		</div>
		<div class="visual">
			<img src="https://images.unsplash.com/photo-1548142813-c348350df52b?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NzgzMDU1NDY&ixlib=rb-4.0.3&q=80" alt="" />
		</div>
	</section>
	<section class="card">
		<div class="text-content">
			<h3>Elevate Your Brand with Exceptional Design</h3><br><br>
			<a href="#">Agendar</a>
		</div>
		<div class="visual">
			<img src="https://images.unsplash.com/photo-1548142813-c348350df52b?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NzgzMDU1NDY&ixlib=rb-4.0.3&q=80" alt="" />
		</div>
	</section>

</article>