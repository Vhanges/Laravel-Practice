<x-layout>
    <div class="container">
        <h2>Contact Us</h2>
        <form>
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">
                Send Message
            </button>
        </form>
    </div>

    @push('styles')
    <style>
        body {s
            background: #f3f4f6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            background: #fff;
            padding: 32px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 24px;
            color: #2d3748;
        }
        label {
            display: block;
            color: #4a5568;
            margin-bottom: 8px;
        }
        input, textarea {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
            margin-bottom: 16px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input:focus, textarea:focus {
            outline: none;
            border-color: #4299e1;
        }
        button {
            width: 100%;
            background: #4299e1;
            color: #fff;
            padding: 10px 0;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #2563eb;
        }
    </style>
    @endpush
</x-layout>
