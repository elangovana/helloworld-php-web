from locust import HttpLocust, TaskSet, task

class HomePageTastSet(TaskSet):
    @task
    def test_index(self):
        self.client.get("/index.php")

class MyLocust(HttpLocust):
    task_set = HomePageTastSet
    min_wait = 5000
    max_wait = 15000
