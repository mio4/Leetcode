void QuickSort(int* nums, int left, int right){
    if(left < right){
        int i = left;
        int j = right;
        int x = nums[left];
        while(i < j){
            while(i < j && nums[j] >= x) //从右到左找到第一个比x小的数
                j--;
            if(i < j)
                nums[i++] = nums[j]; //替换
            while(i < j && nums[i] <= x) //从左到右找到第一个比x大的数
                i++;
            if(i < j)
                nums[j--] = nums[i];
        }
    //left == right
    nums[i] = x;
    //Recursion
    QuickSort(nums,left,i-1);
    QuickSort(nums,i+1,right);         
    }
}
int arrayPairSum(int* nums, int numsSize) {
    //QuickSort Here
    QuickSort(nums,0,numsSize-1);
    //...
    //choose the even element
    int i;
    int sum = 0;
    for(i=0 ; i < numsSize; i++){
        if(i%2 == 0){
            sum += nums[i];
        }
    }
    return sum;
}