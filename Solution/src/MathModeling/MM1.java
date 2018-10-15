package MathModeling;

import java.math.BigDecimal;
import java.math.RoundingMode;
import java.util.ArrayList;

/**
 * 数学建模：单服务器排队系统的建模与仿真
 */
public class MM1 {

	/**
	 *
	 * @param arrive_time 平均到达时间
	 * @param service_time 平均服务时间
	 * @param customersCnt 顾客数目
	 * @param queue_len 队列最大长度
	 * @out ave_wait_cus 平均等待客户数
	 * @out ave_wait_time 平均等待时间
	 * @out serve_use_rate 服务器利用率
	 */
	public static void MM1_Queue(double arrive_time, double service_time, int customersCnt, int queue_len){
		double cur_time = 0; //模拟时间
		Customer[] customers = new Customer[customersCnt];
		for(int i=0; i < customersCnt; i++){
			customers[i] = new Customer();
			customers[i].generateTime(arrive_time,service_time);
		}
		BubbleSort(customers);
		//输出初始化信息
		for(int i=0; i < customersCnt; i++){
			customers[i].id = i+1;
			BigDecimal arr_time = new BigDecimal(customers[i].getArr_time()).setScale(2,RoundingMode.UP);
			BigDecimal ser_time = new BigDecimal(customers[i].getSer_time()).setScale(2,RoundingMode.UP);
			customers[i].changeTime(arr_time.doubleValue(),ser_time.doubleValue());
			System.out.println("第" + (i+1) + "个用户的进入时间是 " + customers[i].getArr_time() + ",服务时间是 " + customers[i].getSer_time());
		}
		//计算结果

		/* 尝试算法
		ArrayList<Customer> queue = new ArrayList<Customer>(queue_len);
		for(int i=0; i < customersCnt; i++){ //第一层循环：按事件进行
			cur_time = customers[i].getArr_time();
			if(queue.size() < queue_len) {
				//首先判断是否需要出队
				for(int j=0; j < queue.size(); j++){ //第二层循环：遍历队伍
					if(queue.get(j).getArr_time() + queue.get(j).getSer_time() < cur_time){
						BigDecimal c_time = new BigDecimal(cur_time).setScale(2,RoundingMode.UP);
						System.out.println("第" + queue.get(j).id + "个顾客出队，出队时间：" + To2bits(queue.get(j).arr_time + queue.get(j).ser_time));
						for(int k=j; k < queue.size(); k++){ //第三层循环：更新时间
							if(queue.get(k).getArr_time() < queue.get(j).getArr_time() + queue.get(j).getSer_time()){
								queue.get(k).arr_time = queue.get(j).getArr_time() + queue.get(j).getSer_time();
							}
						}
						queue.remove(j);
					} else{
						break;
					}
				}
				//入队
				queue.add(customers[i]);
			}
			else{ //如果队列满则放弃入队
				System.out.println("队列已满：第" + i + "个顾客不能入队");
			}
		}

		while(queue.size() != 0) {
			cur_time += 1;
			for(int i = 0; i < queue.size(); i++) {
				if(queue.get(i).getArr_time() + queue.get(i).getSer_time() < cur_time) {
					System.out.println("第" + queue.get(i).id + "个顾客出队，出队时间：" + To2bits(queue.get(i).arr_time + queue.get(i).ser_time));
					for(int k=i; k < queue.size(); k++){
						if(queue.get(k).getArr_time() < queue.get(i).getArr_time() + queue.get(i).getSer_time()){
							queue.get(k).arr_time = queue.get(i).getArr_time() + queue.get(i).getSer_time();
						}
					}
					queue.remove(i);
				} else{
					break;
				}
			}
		}
		*/

		//事件推动模型
		ArrayList<Customer> queue = new ArrayList<Customer>(queue_len);
		double serve_use_rate = 0;
		double ave_wait_cus = 0;
		double ave_wait_time = 0;
		double free_time = 0;
		double wait_time = 0;
		double queue_area = 0; //队列面积
		for(int i=0; i < customersCnt; i++){ //把一个用户的进入和离开当做事件
			if(customers[i].getArr_time() < cur_time){ //存在等待时间
				wait_time += (cur_time - customers[i].arr_time);
				customers[i].arr_time = cur_time;
			} else{ //对于服务器空闲的时间
				free_time += (customers[i].arr_time - cur_time);
			}
			cur_time = To2bits(customers[i].getArr_time()+ customers[i].getSer_time());
			int queue_num = getQueueNum(cur_time,customers);
			queue_area += (queue_num + (cur_time - customers[i].arr_time));
			serve_use_rate = (cur_time - free_time) / (cur_time);
			ave_wait_time = wait_time / queue_num;
			ave_wait_cus = queue_area / cur_time;
			System.out.println("--- \n第" + (i+1) + "个顾客出队时间是 " + cur_time);
			System.out.println("当前服务器利用率 " + To4bits(serve_use_rate));
			System.out.println("当前平均等待客户数" + To4bits(ave_wait_cus));
			System.out.println("当前平均等待时间" + To4bits(ave_wait_time));
		}
	}

	/**
	 * 比较顾客到达时间
	 * @param c1
	 * @param c2
	 * @return
	 */
	public static boolean BiggerThan(Customer c1, Customer c2){
		if(c1.getArr_time() > c2.getArr_time())
			return true;
		return false;
	}

	/**
	 * 根据顾客到达时间进行排序
	 * @param customers
	 */
	public static void BubbleSort(Customer[] customers){
		int len = customers.length;
		for(int i=0; i < len; i++){
			for(int j=0; j < len-i-1; j++){
				if(BiggerThan(customers[j],customers[j+1])){
					Customer t = customers[j];
					customers[j] = customers[j+1];
					customers[j+1] = t;
				}
			}
		}
	}

	/**
	 * 将double类型四舍五入为n位小数
	 * @param d
	 * @return
	 */
	public static double To2bits(double d){
		BigDecimal bd = new BigDecimal(d).setScale(2,RoundingMode.UP);
		return bd.doubleValue();
	}

	public static double To4bits(double d){
		BigDecimal bd = new BigDecimal(d).setScale(4,RoundingMode.UP);
		return bd.doubleValue();
	}

	public static int getQueueNum(double cur_time,Customer[] customers){ //获取当前队列人数
		int cnt = 0;
		int len = customers.length;
		for(int i=0; i < len; i++){
			if(customers[i].arr_time + customers[i].ser_time < cur_time)
				cnt++;
		}
		return cnt;
	}

	public static void main(String[] args){
		MM1_Queue(10,10,10,20);
	}
}
