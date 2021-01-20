

# Solution One

```java
class Solution {
    List<List<Integer>> result = new ArrayList<>();
    public List<List<Integer>> combinationSum(int[] candidates, int target) {
        //1. 边界case，直接return
        if(candidates == null || candidates.length == 0 || target < 0){
            return result;
        }

        //2. 调用递归
        List<Integer> list = new ArrayList<>();
        process(candidates, target, list, 0);

        return result;
    }

    public void process(int[] candidates, int target, List<Integer> list, int start){
        //1. 建立递归终止条件
        if(target < 0){
            return;
        }
        if(target == 0){
            result.add(new ArrayList<>(list));
        }

        //2. 每次从0开始遍历数组
        for(int i=start; i < candidates.length; i++){
            list.add(candidates[i]);
            process(candidates, target - candidates[i], list, i);
            list.remove(list.size()-1);
        }
    }
}
```



```shell
candidates = [2,3,6,7],target = 7
output:[[2,2,3],[7]]

//正向查找的过程分析：

循环（1）
入栈 2 2 2 2 -> target=8 > 7
退栈 2 2 2 
入栈 2 2 2 3 -> target=9 > 7
退栈 2 2 2 
入栈 2 2 2 6 -> target=12 > 7
退栈 2 2 2
入栈 2 2 2 7 -> target=13 > 7
退栈 2 2 2 

循环（2）
退栈 2 2 
入栈 2 2 3 -> target=7 new ArrayList<>(list) ，copy数组放入结果集
```





# Solution Two

```java
class Solution {
    public List<List<Integer>> result = new ArrayList<>();
    public List<List<Integer>> combinationSum(int[] candidates, int target) {
        // 1.处理边界输入
        if(candidates == null || candidates.length == 0 || target < 0){
            return result;
        }

        // 2.递归入口
        process(candidates,0,target,new ArrayList<>(),0);

        // 3.返回结果集
        return result;
    }

    public void process(int[] candidates, int sum, int target, List<Integer> list, int start){
        // 1.处理递归结束条件
        if(sum > target){
            return ;
        }
        if(sum == target){
            result.add(new ArrayList<>(list));
        }

        // 2.遍历candidates
        // ① 需要以start标记位开始遍历，例如[2,3,4]集合，target=5，如果每次都从零开始，[2,3]和[3,2]会有重复集合
        // ② list.add(candidates[i]) 表示入栈，list.remove(last_one) 表示出栈，不出栈的话，list元素会一直累计
        for(int i = start; i < candidates.length ; i++){
            list.add(candidates[i]);
            process(candidates,sum+candidates[i],target,list,i);
            list.remove(list.size()-1);
        }
    }
}
```

题目拆解：

```shell
输入：
[2,3,5]数组中求和为8的组合情况
结果：
[2,2,2,2]
[2,3,3]
[3,5]

（1）刚开始觉得困难，是因为每个数字可以重复使用，不知道如何判断每个数字可以用几遍，不知道如何遍历数组，
（2）实际上数字组合是有边界的，边界条件是和大于target之后，就可以停止查找
（3）递归的本质在于不断接近「解」，例如从2开始求和，不断接近target，如果超过target则停止查找。
（4）注意退栈和出栈的动作
```



























































