//My Function:
//第一遍遍历，找到所有最大值，加入到ArrayList
//第二遍遍历，找到ArrayList中最大值
class Solution {
    public int findMaxConsecutiveOnes(int[] nums) {
        ArrayList<Integer> maxList = new ArrayList<Integer>();
        int len = nums.length;
        int max = 0;
        for(int i=0;i<len;i++){
            if(nums[i]==0){
                maxList.add(max);
                max = 0;
            }
            else if(nums[i]==1) {
                max++;
                if(i == len-1) maxList.add(max);
            }
        }
        max = 0;
        for(int i=0;i < maxList.size();i++){
            if(maxList.get(i) >= max) max = maxList.get(i);
        }
        return max;
    }
}
//Discussion:
//只需要遍历一遍，在遍历的同时就可以找到最大值
class Solution {
    public int findMaxConsecutiveOnes(int[] nums) {
        int maxCnt = 0;
        int cnt = 0;
        if(nums != null){
            for(int n : nums){
                if(n == 1){
                    cnt++;
                    maxCnt = cnt > maxCnt ? cnt : maxCnt;
                }
                else {
                    cnt = 0;
                }
            }
        }
        return maxCnt;
    }
}