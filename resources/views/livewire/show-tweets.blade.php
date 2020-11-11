<div>
    Show Tweets

    <p>{{$message}}</p>

    <form wire:submit.prevent="create" method="post">
        <input type="text" name="message" id="message" wire:model="message">
        <button type="submit">Criar Tweet</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br>
    @endforeach
</div>
