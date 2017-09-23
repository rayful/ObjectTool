# ObjectTool
与对象/类有关的工具基类。

### 安装
composer require rayful/object-tool

### 使用 
##### trait objectTool
包含遍历对象及获得当前对象公开属性的等四个基础方法，多个包里面会用到。
- toArray(): 获取这个类里面的所有公开属性的值，关键方法。（以前的publics方法）
- set(): 把外界的array map设到当前这个对象中去。
- clear(): 清空当前对象的所有值及键。
- reset(): 清空后，再设进去。

#### class ReflectionPropertyX
ReflectionProperty的扩展，主要是可以把注释里面的元素抽出来，放在tags属性里面，然后通过两个方法获取。
- getTag($name): 把注释里面的@var string，其中var就是$tagName，string就是值。
- getTags(): 把注释里面的属性和值遍历出来。
- 具体用法请见test/test.php文件。