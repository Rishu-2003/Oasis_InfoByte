		const counterNum=document.querySelectorAll(".sta");
			const speed=20;
			counterNum.forEach((curElem)=>{
				const updateNumber= () => {
					const targetNumbar = parseInt(curElem.dataset.count);
					//console.log(targetNumbar);
					const initialNum=parseInt(curElem.innerText);
					//console.log(initialNum);

					const increment = Math.trunc(targetNumbar/speed);
					//console.log(increment);
					if(initialNum<targetNumbar){
						curElem.innerText=`${initialNum+increment+"+"}`;
						setTimeout(updateNumber,70);
					}
				}
				updateNumber();
			});