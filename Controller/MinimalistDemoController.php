<?php
/**
 *  CakePHP HighCharts Plugin
 * 
 * 	Copyright (C) 2012 Kurn La Montagne / destinydriven
 *	<https://github.com/destinydriven> 
 * 
 * 	Multi-licensed under:
 * 		MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
 * 		LGPL <http://www.gnu.org/licenses/lgpl.html>
 * 		GPL <http://www.gnu.org/licenses/gpl.html>
 */
class MinimalistDemoController extends HighChartsAppController
{
	public $name = 'MinimalistDemo';
	public $components = array('HighCharts.HighCharts');
	public $helpers = array('HighCharts.HighCharts');
	public $uses = array();
	public $layout = 'chart.demo';

	public function column()
	{
		$chartData = array
				(
				       7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6
				);
				
		$chartName = 'Column Chart';
		
		$mychart = $this->HighCharts->create
						 (
							$chartName,
							array
							(
								'type' => 'column',
								'exporting' => TRUE
							)
						 );

	
	        $this->HighCharts->setChartParams
			(
				$chartName,
				array
				(
					'renderTo'			=> 'columnwrapper',  // div to display chart inside
					'chartWidth'			=> 800,
					'chartHeight'			=> 600,					
					'title'				=> 'Monthly Sales Summary',
					'xAxisLabelsEnabled' 		=> TRUE,				
					'xAxisCategories'           	=> array(
										'Jan', 
										'Feb', 
										'Mar', 
										'Apr', 
										'May', 
										'Jun',
										'Jul', 
										'Aug', 
										'Sep', 
										'Oct', 
										'Nov', 
										'Dec'													
									             ),				
					'yAxisTitleText' 		=> 'Units',									
					'enableAutoStep' 		=> FALSE							
				) 
			);
		
        	$series = $this->HighCharts->addChartSeries();
		
		$series->addName('Example Online Store')->addData($chartData);

		$mychart->addSeries($series);	
		
	}

	
}
