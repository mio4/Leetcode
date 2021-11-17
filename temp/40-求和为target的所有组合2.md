```
两道题的区别：
39：candidates数组中的所有元素可以被重复使用
40：candidates包含重复元素，每个元素只能被使用一次
```

```java
class Solution {
    List<List<Integer>> result = new ArrayList<>();
    Set<List<Integer>> set = new HashSet<>();
    public List<List<Integer>> combinationSum2(int[] candidates, int target) {
        Arrays.sort(candidates);
        search(candidates,target,0,0,new ArrayList<>());
        return result;
    }

    public void search(int[] candidates, int target, int start,int sum, List<Integer> list){
        if(sum == target){
            List<Integer> tmp = new ArrayList<>(list);
            if(!set.contains(tmp)){
                result.add(tmp);
                set.add(tmp);
            }
            return ;
        } else if(sum > target){
            return ;
        }
        for(int i=start; i < candidates.length; i++){
            list.add(candidates[i]);
            search(candidates,target,i+1,sum+candidates[i],list);
            list.remove(list.size()-1);
        }
    }
}
```

1、Set暴力去重，AC时间效果不好



```java
class Solution {
    List<List<Integer>> result = new ArrayList<>();
    public List<List<Integer>> combinationSum2(int[] candidates, int target) {
        Arrays.sort(candidates);
        boolean[] used = new boolean[candidates.length];
        search(candidates,target,0,0,new ArrayList<>(),used);
        return result;
    }

    public void search(int[] candidates, int target, int start,int sum, List<Integer> list, boolean[] used){
        if(sum == target){
            List<Integer> tmp = new ArrayList<>(list);
            result.add(tmp);
            return ;
        } else if(sum > target){
            return ;
        }
        for(int i=start; i < candidates.length; i++){
            if(used[i]){
                continue;
            }
            if(i > 0 && candidates[i] == candidates[i-1] && !used[i-1]){
                continue;
            }

            list.add(candidates[i]);
            used[i] = true;
            search(candidates,target,i+1,sum+candidates[i],list,used);
            list.remove(list.size()-1);
            used[i] = false;
        }
    }
}
```

```
candidates：       10 1 2 7 6 1 5 
sorted_candidates：1,1,2,5,6,7,10 
target=8 

result：
1,7
1,2,5
2,6
1,1,6
```

39+40【求和为target的组合】，本质上和46+47【全排列】是同一种类型：

其中对应关系：39——>46，40——>47

1、【39/46】都可以用Set对List强制去重

2、【40/47】都可以是先排序，然后标记前一个相同元素，如果元素相同并且没有被used，那么剪枝（没有被used，说明两者处于递归的同一个函数中）







































































