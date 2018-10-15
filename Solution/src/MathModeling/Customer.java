package MathModeling;

import java.util.Random;


public class Customer {
	double arr_time; //到达时间|进入服务时间
	double ser_time; //服务时间
	public int id;

	/**
	 * 根据指数分布获取随机时间
	 * @param arrive_time
	 * @param service_time
	 */
	public void generateTime(double arrive_time, double service_time){
		Random r = new Random();
		double seed = r.nextDouble(); //生成[0,1]之间的小数
		arr_time = -(1*arrive_time) * Math.log(1-seed);
		seed = r.nextDouble();
		ser_time = -(1*service_time) * Math.log(1-seed);

	}

	public void changeTime(double arr_time, double ser_time){
		this.arr_time = arr_time;
		this.ser_time = ser_time;
	}

	public double getArr_time(){
		return this.arr_time;
	}

	public double getSer_time(){
		return this.ser_time;
	}
}
