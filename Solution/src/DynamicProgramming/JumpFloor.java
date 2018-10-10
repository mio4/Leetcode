package DynamicProgramming;

import java.util.HashMap;

public class JumpFloor {

	/**
	 * 跳楼梯问题的一般算法
	 * @param n
	 * @return
	 */
	public static int jump(int n){
		if(n == 1)
			return 1;
		if(n == 2)
			return 2;
		return jump(n-1) + jump(n-2);
	}

	/**
	 * 跳楼梯问题的备忘录算法:
	 * 将递归的结果存储到HashMap中，每次计算时判断是否已经计算过了，可以避免重复计算
	 * 时间复杂度和空间复杂度为O(n)
	 * @param n
	 * @return
	 */
	public static int jump_hash(int n,HashMap<Integer,Integer> map){
		if(n < 0)
			return 0;
		if(n == 1)
			return 1;
		if(n == 2)
			return 2;
		if(map.containsKey(n))
			return map.get(n);
		else{
			int value = jump_hash(n-1,map) + jump_hash(n-2,map);
			map.put(n,value);
			return value;
		}
	}

	public static void main(String[] args){
		//System.out.println(jump(10));
		HashMap<Integer,Integer> map = new HashMap<Integer,Integer>();
		System.out.println(jump_hash(10,map));
	}
}
