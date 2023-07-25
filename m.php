<html>
<body>
<style>
/*wrapper element so column padding doesn't affect fixed header background*/
.scroll-window-wrapper{
  position:relative;
}
/* element containing the table */
.scroll-window{
	height: 20rem;
	overflow-x: hidden;
	overflow-y: scroll;
}
.scroll-window table{
  margin-bottom:0;
}
	/*fixed header background*/
.scroll-window:before{
	content:"";
	position: absolute;
	width:100%;
	height:2.5rem;
	display: table;
	z-index: 10;
	background:rgba(170,170,170,0.8);
}


/*the actual fixed header*/
table.fixed-header th div{
  position: absolute;
  margin-top: -.5rem;
  z-index: 11;
  color:#333;
}
table.fixed-header  thead tr{
  height:2.5rem;
}

.user-list{
	width:100%;
}

.user-list	td.text-right{
	width:16rem;
}

/*-----experimental scrollbar styles-----*/
/* line 199, ../scss/main.scss */
#bodywrap ::-webkit-scrollbar {
  width: 1rem;
}
/* line 202, ../scss/main.scss */
#bodywrap ::-webkit-scrollbar-button {
  /* width:1rem;*/
}
/* line 205, ../scss/main.scss */
#bodywrap ::-webkit-scrollbar-track {
  background-color: #eaeaea;
  border-left: 1px solid #ccc;
}
/* line 212, ../scss/main.scss */
#bodywrap ::-webkit-scrollbar-thumb {
  background-color: #ccc;
}
/* line 215, ../scss/main.scss */
#bodywrap ::-webkit-scrollbar-thumb:hover {
  background-color: #aaa;
}

</style>
<div id="bodywrap">
<div class="row">
<div class="large-10 columns">
  <div class="scroll-window-wrapper">
  <h2>
    Fixed Table Header Demo<br>
    <small>A Scrollable table with a fixed header</small>
  </h2>
	<div class="scroll-window">
	<table class="table table-striped table-hover user-list fixed-header">
		<thead>
			<th><div>Name</div></th>
			<th><div>Email</div></th>
			<th><div>Status</div></th>
			<th><div></div></th>
		</thead>
		<tbody>
			<tr>
				<td>Michael Jones</td>
				<td>michael@gmail.com</td>
				<td>active</td>
				<td class="text-right">
					<button class="button tiny">View User</button>
					<button class="button alert tiny">Delete</button>			
				</td>
			</tr>
			
			
 		</tbody>
	</table>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>