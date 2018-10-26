package Linkedlist.SortList;

import java.util.Arrays;

/**
 * 归并排序，对于底层的细节需要继续深入总结
 */
public class MergeSort {

	public static void sort(int[] arr){
		int[] temp = new int[arr.length];
		sort(arr,0,arr.length-1,temp);
	}

	public static void sort(int[] arr,int left, int right, int[] temp){
		if(left < right){
			int mid = (left + right) / 2;
			sort(arr,left,mid,temp);
			sort(arr,mid+1,right,temp);
			merge(arr,left,mid,right,temp);
		}
	}

	public static void merge(int[] arr, int left, int mid, int right,int[] temp){
		int i = left; //左序列指针
		int j = mid+1; //右序列指针
		int t = 0; //临时数组指针
		while(i <= mid && j <= right){
			if(arr[i] <= arr[j])
				temp[t++] = arr[i++];
			else
				temp[t++] = arr[j++];
		}

		while(i <= mid)
			temp[t++] = arr[i++];

		while(j <= right)
			temp[t++] = arr[j++];

		//数组拷贝
		t = 0;
		while(left <= right)
			arr[left++] = temp[t++];
	}

	public static void main(String[] args){
		int []arr = {9,8,7,6,5,4,3,2,1};
		sort(arr);
		System.out.println(Arrays.toString(arr));
	}
}
